<?php
/**
 * Created by PhpStorm
 * User: hejinlong
 * Date: 2021/3/9
 * Time: 4:20 PM
 */

namespace YunceData\Model;


class CreatePreData extends YunceData
{
    /**
     * @var
     * 创建预导入数据的任务类型
     */
    public $taskType;

    /**
     * @var
     * 创建任务用的任务配置
     */
    public $taskConfJson;

    /**
     * @var
     * 所有配置了的工具，供检查使用
     */
    private $toolArr = [];

    /**
     * @var
     * 所有配置了的工具及其属性，供后续查询pcode使用
     */
    private $toolPropArr = [];


    public function __construct($config)
    {
        if (!isset($config["taskType"]) || empty($config["taskType"])) {
            throw new \Exception("未设置任务类型: taskType");
        }

        if (!isset($config["taskConfJson"]) || empty($config["taskConfJson"])) {
            throw new \Exception("未设置任务配置: taskConf");
        }

        $this->taskType = $config["taskType"];
        $this->taskConfJson = $config["taskConfJson"];
        $this->toolPrepare();//预处理工作
    }

    /**
     * Notes:单独某个工具的属性处理，生成用于查询pcode的数据
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 11:19 AM
     * @param $properties 单独某个工具的属性配置
     * @param $arr array 用来存放属性递归处理的结果
     * @param $parentCode string 父级pcode
     *
     * @return array
     */
    public function propertyPrepare($properties, $arr = [], $parentCode = "")
    {
        if (is_array($properties)) {
            foreach ($properties as $childProp) {
                if (count($childProp->pvalue) > 0) {
                    $arr = $this->propertyPrepare($childProp->pvalue, $arr, $childProp->pcode);
                }
                $tmp = [
                    "pname" => $childProp->pname,
                    "pcode" => $childProp->pcode,
                    "parentCode" => $parentCode,
                    "is_check_all" => isset($childProp->is_check_all) ? $childProp->is_check_all : false,
                ];
                $arr[] = $tmp;
            }
        } else {
            foreach ($properties->pvalue as $childProp) {
                if (count($childProp->pvalue) > 0) {
                    $arr = $this->propertyPrepare($childProp->pvalue, $arr, $childProp->pcode);
                }
                $tmp = [
                    "pname" => $childProp->pname,
                    "pcode" => $childProp->pcode,
                    "parentCode" => $properties->pcode,
                    "is_check_all" => isset($childProp->is_check_all) ? $childProp->is_check_all : false,
                ];
                $arr[] = $tmp;
            }
        }

        return $arr;
    }


    /**
     * Notes:整理所有工具的所有属性，用于后续的查询工作
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 1:48 PM
     */
    private function toolPrepare()
    {
        $conf = new YunceDataConf();
        $conf->load($this->taskConfJson);
        foreach ($conf->properties as $toolProperty) {
            $toolArr = [
                "tool" => $toolProperty->toolType,
                "parentCheckAll" => $toolProperty->is_check_all,
                "propMap" => []
            ];

            $this->toolArr[] = $toolProperty->toolType;

            foreach ($toolProperty->property as $property) {//一级属性
                $toolArr["propMap"][$property->pname] = [
                    "pcode" => $property->pcode,
                    "pname" => $property->pname,
                    "is_check_all" => $property->is_check_all,
                    "childrenProp" => $this->propertyPrepare($property)//对每一个一级属性下的属性做整理，供查询使用
                ];
            }

            $this->toolPropArr[$toolProperty->toolType] = $toolArr;
        }
    }

    /**
     * Notes:检查用户输入的用于生成预处理数据的mark，注意是marks的一个元素，每个元素都需要做检查才能进行下一步，所以本方法一定要放在循环中
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 4:56 PM
     * @param $mark
     *
     * @throws \Exception
     */
    private function checkInputMark($mark)
    {
        if (!isset($mark["tool"])) {
            throw new \Exception("未设置预导入数据的工具类型");
        }

        if (!in_array($mark["tool"], $this->toolArr)) {
            throw new \Exception("配置里面未设置该工具：" . $mark["tool"]);
        }

        if (!isset($mark["props"])) {
            throw new \Exception("未设置预导入数据的属性");
        }

        //todo:对于不同的工具类型和不同的任务类型，此处的用户输入需要做不同的约束，慢慢完善，可以考虑用jsonSchema文件验证

        //OCR任务，不太优雅，后续优化
        if ($this->taskType == YunceData::TASK_TYPE_OCR) {
            if (!isset($mark["content"])) {
                throw new \Exception("ocr任务必须设置content, 没有内容请填空");
            }
        }

        //矩形工具，不太优雅，后续优化
        if ($mark["tool"] == "rect") {
            if (!isset($mark["point"])) {
                throw new \Exception("配置了矩形工具时必须要配置point字段");
            }
        }
    }

    /**
     * Notes:检查用户输入
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 5:19 PM
     * @param $arr
     */
    private function checkInputMarks($arr)
    {
        foreach ($arr["marks"] as $mark) {
            try {
                $this->checkInputMark($mark);
            } catch (\Exception $e) {
                echo "输入的预导入数据格式有错，错误信息如下：" . PHP_EOL;
                echo $e->getMessage() . PHP_EOL;
                echo "您配置的内容：" . PHP_EOL;
                echo json_encode($mark, JSON_UNESCAPED_UNICODE) . PHP_EOL;
                exit();
            }
        }
    }

    /**
     * Notes:生成预导入属性，此方法可以对外公开，使扩展性良好
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 5:33 PM
     * @param $propertiesArr 用于生成预置属性的数组，元素质检逗号隔开
     *
     *       [
     *           "type,pedestrian,true",//必须从一级开始处理，生成的时候一级不存
     *           "General attributes of objects,carried,false"
     *       ],
     *
     * @param $toolType 工具类型
     * @throws \Exception
     * @return array
     */
    public function createProperties($propertiesArr, $toolType)
    {
        $ret = [];
        foreach ($propertiesArr as $propString) {
            $propStringArr = explode(",", trim($propString));
            $rootProp = $propStringArr[0];//
            if (!isset($this->toolPropArr[$toolType]["propMap"][$rootProp])) {
                throw new \Exception("未知的一级属性：" . $rootProp);
            }

            $rootPcode = $this->toolPropArr[$toolType]["propMap"][$rootProp]["pcode"];
            unset($propStringArr[0]);//确认过，一级属性不需要存到结果里面，重要！！！
            $prop = $this->_createProp($propStringArr, $toolType, $rootPcode, $rootProp);

            foreach ($prop as $p) {//属性归整，使一级属性个数符合要求
                if (!isset($ret[$rootProp])) {
                    $ret[$rootProp] = [];
                }

                if (!in_array($p, $ret[$rootProp])) {
                    $ret[$rootProp][] = $p;
                }
            }
        }


        return array_values($ret);
    }


    /**
     * Notes:根据 parentCode获取其下所有子选项
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 7:40 PM
     * @param $toolType
     * @param $rootPcode
     * @param $parentCode
     * @return array
     */
    private function _getPropByParentCode($toolType, $rootPcode, $parentCode) {
        $ret = [];
        $propMap = $this->toolPropArr[$toolType]["propMap"];
        $childrenProp = [];
        foreach ($propMap as $propMapValue) {//找到对应工具的对应一级属性下的所有属性
            if ($propMapValue["pcode"] == $rootPcode) {
                $childrenProp = $propMapValue["childrenProp"];
                break;
            }
        }

        foreach ($childrenProp as $childProp) {
            if ($childProp["parentCode"] == $parentCode) {
                $ret[] = $childProp;
            }
        }

        return $ret;
    }

    /**
     * Notes: 根据规则拼装属性数组
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 7:42 PM
     * @param $propStringArr
     * @param $toolType
     * @param $rootPcode
     * @param $rootPname
     * @return array
     */
    private function _createProp($propStringArr, $toolType, $rootPcode, $rootPname)
    {
        $ret = [];
        $lastParentPcode = $rootPcode;
        foreach ($propStringArr as $prop) {
            $propArrByParentCode = $this->_getPropByParentCode($toolType, $rootPcode, $lastParentPcode);
            $notFindFlag = true;
            foreach ($propArrByParentCode as $p) {
                if ($prop === $p["pname"]) {
                    $ret[] = [
                        "pname" => $p["pname"],
                        "pcode" => $p["pcode"],
                        "parentid" => $rootPcode,
                        "prevcode" => $lastParentPcode,
                    ];
                    $lastParentPcode = $p["pcode"];
                    $notFindFlag = false;
                    break;
                }
            }

            if ($notFindFlag) {
                echo "未找到属性：" . $prop . PHP_EOL;
                echo "请仔细检查您的拼写是否正确！！！" . PHP_EOL;
                echo "对应一级属性：" . $rootPname . PHP_EOL;
                echo "未找到的预导入对应规则为：" . implode(",", $propStringArr) . PHP_EOL;
                echo "已找到相关配置，供参考：" . json_encode($propArrByParentCode) . PHP_EOL;
                exit();
            }
        }

        return $ret;
    }



    /**
     * Notes:生成预导入数据，此方法可以对外公开，使扩展性良好
     * User: hejinlong
     * Date: 2021/3/10
     * Time: 5:22 PM
     * @param $arr
     * @return array
     * @throws \Exception
     */
    public function createPredataJson($arr)
    {
        $ret = [
            "marks" => []
        ];

        foreach ($arr["marks"] as $item) {
            $tmp = [];
            $tmp["type"] = $item["tool"];
            $tmp["property"] = $this->createProperties($item["props"], $tmp["type"]);


            //OCR任务
            if ($this->taskType == YunceData::TASK_TYPE_OCR) {
                if (!isset($item["content"])) {
                    throw new \Exception("ocr任务必须设置content, 没有内容请填空");
                }

                $tmp["content"] = $item["content"];
            }

            //矩形工具
            if ($item["tool"] == "rect") {
                if (!isset($item["point"])) {
                    throw new \Exception("配置了矩形工具时必须要配置point字段");
                }

                $tmp["point"] = $item["point"];
            }

            $ret["marks"][] = $tmp;
        }

        return $ret;
    }


    /**
     * Notes:导出用于预导入的json数据
     * User: hejinlong
     * Date: 2021/3/9
     * Time: 4:53 PM
     * @param $arr
     * @throws \Exception
     * @return string
     *
     */
    public function exportPreDataJson($arr)
    {
        //用户输入检查
        $this->checkInputMarks($arr);

        //生成预导入数据
        $ret = $this->createPredataJson($arr);

        return json_encode($ret, JSON_UNESCAPED_UNICODE);
    }
}

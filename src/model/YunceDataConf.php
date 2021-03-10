<?php
/**
 * Created by PhpStorm
 * User: hejinlong
 * Date: 2021/3/9
 * Time: 4:32 PM
 */

namespace YunceData\Model;


class YunceDataConf
{
    /**
     * @var array[YunceDataProperties]
     */
    public $properties;

    public function load($json)
    {
        $mapper = new \JsonMapper();
        $obj = $mapper->map(json_decode($json), new static());
        $class = new \ReflectionClass($obj);
        foreach ($class->getProperties(\ReflectionProperty::IS_PUBLIC) as $property) {
            foreach ($obj as $key => $item) {
                if ($key == $property->getName()) {
                    $property->setValue($this, $item);
                    break;
                }
            }
        }
    }
}

<?php
/**
 * Created by PhpStorm
 * User: hejinlong
 * Date: 2021/3/9
 * Time: 4:20 PM
 */

namespace YunceData\Model;


class YunceData
{
    const TASK_TYPE_COMMON = 1001; //图片通用标注类型
    const TASK_TYPE_OCR = 1002; //ocr文字转写标注类型
    const TASK_TYPE_REID = 1003; //reid目标跟踪标注类型
    const TASK_TYPE_SEMANTIC = 1004; //语义分割
    const TASK_TYPE_ANGLE = 1005; //图片角度
    const TASK_TYPE_IMAGE_POINT = 1006; //图片角度
    const TASK_TYPE_POINTCLOUD = 900; //点云类型
    const TASK_TYPE_PIC_POINTCLOUD = 901; //点云3D2D融合
    const TASK_TYPE_PIC_POINTCLOUD_BATE = 902; //点云测试版
    const TASK_TYPE_PIC_POINTCLOUD_SEM = 903; //点云语义分割
    const TASK_TYPE_VIDEO = 1201; //视频标注
    const TASK_TYPE_AUDIO = 704; //语音标注
    const TASK_TYPE_NLP = 1101; // nlu标注类型
    const TASK_TYPE_NLG = 1103; //nlg
    const TASK_TYPE_NER = 1202; //NER标注
    const TASK_TYPE_DATA_CLEANING = 1301; //数据清洗任务
    const TASK_TYPE_DATA_CLASSIFICATION = 1302; //数据分类
    const TASK_TYPE_AUDIO_TRANS = 701; //音频转写标注
    const TASK_TYPE_AUDIO_LINKAGE = 702; //音频+属性+转写标注
    const TASK_TYPE_AUDIO_SEGMENTATION = 703; //音频分割+属性标注
}

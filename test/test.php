<?php
/**
 * Created by PhpStorm
 * User: hejinlong
 * Date: 2021/3/9
 * Time: 4:49 PM
 */

require '../vendor/autoload.php';


$taskConf = '{"assist":{"minWidth":1,"minHeight":1},"package_type":1,"matrix":{"image_0":[[223.7750658744,830.253759786,0.5029076413,-457.5375889807],[-213.4040888965,390.2887145855,-612.9284195512,470.1608841977],[-0.4969567,0.8676681,-0.0136083,-0.6271915],[0,0,0,1]],"image_2":[[804.975766186,190.1665378508,16.8715820272,-1091.1008319192],[237.3874738006,380.6758389063,-592.4326057671,173.2489299031],[0.5078242,0.8614035,0.0099545,-1.2879901],[0,0,0,1]],"image_4":[[638.640476964,-896.8969190706,17.1775310308,-565.59503308],[443.660224842,-5.3362901448,-887.0079324586,400.10933206],[0.999801,-0.0019674,0.0198482,-1.66172],[0,0,0,1]],"image_7":[[-228.4296581242,-816.4266108205,3.1403999221,20.1977050594],[237.9022386719,-394.7625397204,-599.3392426157,255.0965751841],[0.5020934,-0.8646263,0.0179771,-1.113994],[0,0,0,1]],"image_9":[[-820.8709659912,-194.0493937128,-18.311138532,18.6959291344],[-214.2764567538,-395.777574345,-611.9770628826,568.1677655396],[-0.5060715,-0.8624775,-0.0048519,-0.4232938],[0,0,0,1]],"image_11":[[-593.612216667,890.4547618443,-3.7931554818,-123.3923298954],[-425.1826803806,-3.5848760873,-891.1688045632,940.0318868534],[-1,-0.0006285,-0.0008018,-0.3434112],[0,0,0,1]],"image_13":[[615.9007918256,-3068.1408050208,33.0742062792,-1149.8862624928],[452.7743866778,-25.2345336024,-3057.0087271414,3113.9432327506],[0.9998381,-0.0063028,0.0168277,-1.7209203],[0,0,0,1]]},"distortion":"","boxsize":[],"horizon":"","boxsize3d":[],"distance_tool":[],"is_track":1,"auto_frame":0,"transactionType":1,"properties":[{"toolName":"3D矩形","toolType":"rect","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"type","ptitle":"类型","color":"rgba(241,176,167,0.8)","font_color":"rgba(241,176,167,0.8)","pcode":"0311e392","type":"select","pvalue":[{"pname":"pedestrian","ptitle":"行人","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"9db263ed","type":"select","pvalue":[{"pname":"sitting","ptitle":"坐着","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"777943b5","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"77fddde3","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"01816402","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"on_road","ptitle":"路上","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"d253be5d","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"1b9fc5de","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"5b2aa646","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"child","ptitle":"小孩","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"31184cf7","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"4bf7da40","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"b04fa286","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"policeman","ptitle":"警察","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"ca99bd58","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"c96620ea","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"65b94923","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"worker","ptitle":"建筑工人","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"d2519e92","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"c1d658ff","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"7b9900b4","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"fireman","ptitle":"消防员","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"f0ffe46f","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"ff0fcb1b","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"4894d4b2","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"soldier","ptitle":"士兵","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"3b8dc8e4","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"5a174404","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"d21f088c","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"medical","ptitle":"医生","color":"rgba(32,223,200,0.8)","font_color":"rgba(32,223,200,0.8)","pcode":"bfa325c5","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"6568059e","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(30,50,230,0.8)","font_color":"rgba(30,50,230,0.8)","pcode":"dee1ad23","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"car","ptitle":"小汽车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"dda71b98","type":"select","pvalue":[{"pname":"ambulance","ptitle":"救护车","color":"rgba(221,49,142,0.8)","font_color":"rgba(221,49,142,0.8)","pcode":"d4a09065","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"83764c99","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"08be405e","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"policecar","ptitle":"警车","color":"rgba(221,49,142,0.8)","font_color":"rgba(221,49,142,0.8)","pcode":"40abc73f","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"92dedd78","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"b9d2d187","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"front","ptitle":"本车道前车","color":"rgba(221,49,142,0.8)","font_color":"rgba(221,49,142,0.8)","pcode":"ec80b750","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"e6ba104d","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"05ec83f8","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"adjacent","ptitle":"相邻车","color":"rgba(221,49,142,0.8)","font_color":"rgba(221,49,142,0.8)","pcode":"2fa984cb","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"6a65cbed","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,91,154,0.8)","font_color":"rgba(241,91,154,0.8)","pcode":"be255244","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"bus","ptitle":"客车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"8a65c54f","type":"select","pvalue":[{"pname":"adjacent","ptitle":"本车道前车","color":"rgba(85,100,236,0.8)","font_color":"rgba(85,100,236,0.8)","pcode":"64e0ab37","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(23,238,96,0.8)","font_color":"rgba(23,238,96,0.8)","pcode":"1e71e88e","type":"select","pvalue":[],"body_orientation":false},{"pname":"false","ptitle":"否","color":"rgba(23,238,96,0.8)","font_color":"rgba(23,238,96,0.8)","pcode":"8808ddf3","type":"select","pvalue":[],"body_orientation":false}],"body_orientation":false},{"pname":"front","ptitle":"相邻车","color":"rgba(85,100,236,0.8)","font_color":"rgba(85,100,236,0.8)","pcode":"20cb17c9","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(23,238,96,0.8)","font_color":"rgba(23,238,96,0.8)","pcode":"cb07a867","type":"select","pvalue":[],"body_orientation":false},{"pname":"false","ptitle":"否","color":"rgba(23,238,96,0.8)","font_color":"rgba(23,238,96,0.8)","pcode":"69814243","type":"select","pvalue":[],"body_orientation":false}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"truck","ptitle":"卡车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"ae90dd8a","type":"select","pvalue":[{"pname":"head","ptitle":"车头","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"6aadd420","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"a2a3a681","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"d4ac99b1","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"tail","ptitle":"车尾","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"69b245a5","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"0b969cd4","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"ffcf21ac","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"qianyin","ptitle":"牵引车","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"4f20b354","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"8be0fb35","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"dd1b82a1","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"truck_two_cuboid","ptitle":"大车转弯","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"caf51392","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"0a8b4182","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"a7d5e533","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"front","ptitle":"本车道前车","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"14b967ab","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"8aa6d4d7","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"2332495e","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"adjacent","ptitle":"相邻车","color":"rgba(242,156,192,0.8)","font_color":"rgba(242,156,192,0.8)","pcode":"6c26c154","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"3fd3e305","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(219,26,72,0.8)","font_color":"rgba(219,26,72,0.8)","pcode":"8486f3c7","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"bicycle","ptitle":"自行车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"f91ec9b0","type":"select","pvalue":[{"pname":"with_rider","ptitle":"有人在骑车","color":"rgba(94,16,193,0.8)","font_color":"rgba(94,16,193,0.8)","pcode":"098996fb","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"2f141b2d","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"28a458c4","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"without_rider","ptitle":"单独的车，没人在骑","color":"rgba(94,16,193,0.8)","font_color":"rgba(94,16,193,0.8)","pcode":"5206be9f","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"839f4d87","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"5613f8c1","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"on_road","ptitle":"路上","color":"rgba(94,16,193,0.8)","font_color":"rgba(94,16,193,0.8)","pcode":"4170d55d","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"6ff87217","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(241,171,106,0.8)","font_color":"rgba(241,171,106,0.8)","pcode":"8e228557","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"motorcycle","ptitle":"摩托车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"e5107fdf","type":"select","pvalue":[{"pname":"with_rider","ptitle":"有人在骑车","color":"rgba(40,69,220,0.8)","font_color":"rgba(40,69,220,0.8)","pcode":"92847694","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"8bf42bf6","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"bfdd4f30","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"without_rider","ptitle":"单独的车，没人在骑","color":"rgba(40,69,220,0.8)","font_color":"rgba(40,69,220,0.8)","pcode":"62e66f80","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"8d4ff7d6","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"2c29bafc","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"on_road","ptitle":"路上","color":"rgba(40,69,220,0.8)","font_color":"rgba(40,69,220,0.8)","pcode":"464136ec","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"35c11141","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(230,51,61,0.8)","font_color":"rgba(230,51,61,0.8)","pcode":"7dbf17f5","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"tricycle","ptitle":"三轮车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"31b22889","type":"select","pvalue":[{"pname":"with_rider","ptitle":"有人在骑车","color":"rgba(190,19,81,0.8)","font_color":"rgba(190,19,81,0.8)","pcode":"421f8d62","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"19638aa2","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"ea962882","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"without_rider","ptitle":"单独的车，没人在骑","color":"rgba(190,19,81,0.8)","font_color":"rgba(190,19,81,0.8)","pcode":"9bb4a09a","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"713de082","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"5bd72e08","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"on_road","ptitle":"路上","color":"rgba(190,19,81,0.8)","font_color":"rgba(190,19,81,0.8)","pcode":"48468d45","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"74934aba","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(79,205,232,0.8)","font_color":"rgba(79,205,232,0.8)","pcode":"86722f9c","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"other_vehicle","ptitle":"其他车辆","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"f9546a1e","type":"select","pvalue":[{"pname":"construction","ptitle":"建筑车辆","color":"rgba(69,85,232,0.8)","font_color":"rgba(69,85,232,0.8)","pcode":"0d037f26","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"b5de0769","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"c74c4752","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"firetruck","ptitle":"消防车","color":"rgba(69,85,232,0.8)","font_color":"rgba(69,85,232,0.8)","pcode":"d0d1b9c7","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"320b07e7","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"cea865c8","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"front","ptitle":"本车道前车","color":"rgba(69,85,232,0.8)","font_color":"rgba(69,85,232,0.8)","pcode":"ac671791","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"e61f67ff","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"27746ad5","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"adjacent","ptitle":"相邻车","color":"rgba(69,85,232,0.8)","font_color":"rgba(69,85,232,0.8)","pcode":"cecc698c","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"943611e2","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(167,244,42,0.8)","font_color":"rgba(167,244,42,0.8)","pcode":"e4fe7ec4","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"babycar","ptitle":"婴儿车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"59f686b3","type":"select","pvalue":[]},{"pname":"dogcat","ptitle":"狗-猫","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"1e53cb5c","type":"select","pvalue":[]},{"pname":"other_animal","ptitle":"其他动物","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"27e60710","type":"select","pvalue":[]},{"pname":"unknown","ptitle":"未知","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"4f92d4be","type":"select","pvalue":[]},{"pname":"traffic_sign","ptitle":"交通标志牌","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"00ec3ad8","type":"select","pvalue":[{"pname":"negative","ptitle":"反面","color":"rgba(89,238,193,0.8)","font_color":"rgba(89,238,193,0.8)","pcode":"ed89324d","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(34,211,179,0.8)","font_color":"rgba(34,211,179,0.8)","pcode":"61cf154d","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(34,211,179,0.8)","font_color":"rgba(34,211,179,0.8)","pcode":"c5bf0870","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"traffic_light","ptitle":"交通灯","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"b4df97ae","type":"select","pvalue":[{"pname":"red","ptitle":"红灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"68fdded7","type":"select","pvalue":[]},{"pname":"green","ptitle":"绿灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"2dec1abe","type":"select","pvalue":[]},{"pname":"yellow","ptitle":"黄灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"4a3ee2d3","type":"select","pvalue":[]},{"pname":"close","ptitle":"关闭","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"ede33875","type":"select","pvalue":[]},{"pname":"ped_red","ptitle":"行人红灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"2d480d63","type":"select","pvalue":[]},{"pname":"ped_green","ptitle":"行人红灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"5cb8cfc8","type":"select","pvalue":[]},{"pname":"ped_yellow","ptitle":"行人红灯","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"c18316dd","type":"select","pvalue":[]},{"pname":"ped_close","ptitle":"行人关闭","color":"rgba(53,141,222,0.8)","font_color":"rgba(53,141,222,0.8)","pcode":"8e323261","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"traffic_cone","ptitle":"雪糕筒","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"75418eed","type":"select","pvalue":[]},{"pname":"traffic_pillar","ptitle":"交通柱","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"86ace6a7","type":"select","pvalue":[]},{"pname":"traffic_tripod","ptitle":"交通铁三角","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"e8f825fc","type":"select","pvalue":[]},{"pname":"parking_lock","ptitle":"车位锁","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"4043cf26","type":"select","pvalue":[{"pname":"close","ptitle":"关闭","color":"rgba(222,151,247,0.8)","font_color":"rgba(222,151,247,0.8)","pcode":"462120e6","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(154,246,111,0.8)","font_color":"rgba(154,246,111,0.8)","pcode":"e0faab11","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(154,246,111,0.8)","font_color":"rgba(154,246,111,0.8)","pcode":"4e1e2cd5","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":false},{"pname":"hydrant","ptitle":"消防栓","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"5f2234e0","type":"select","pvalue":[]},{"pname":"shoppint_cart","ptitle":"购物车","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"f5e97389","type":"select","pvalue":[]},{"pname":"pillar_avp","ptitle":"柱子","color":"rgba(38,151,232,0.8)","font_color":"rgba(38,151,232,0.8)","pcode":"caff95b5","type":"select","pvalue":[]}],"intro":"","body_orientation":false,"pre_type":false,"is_track_prop":true,"is_check_all":false},{"pname":"General attributes of objects","ptitle":"物体通用属性","color":"rgba(241,176,167,0.8)","font_color":"rgba(241,176,167,0.8)","pcode":"def3787f","type":"select","pvalue":[{"pname":"carried","ptitle":"被运载的","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"3d7af110","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(29,73,185,0.8)","font_color":"rgba(29,73,185,0.8)","pcode":"ae4800ec","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(29,73,185,0.8)","font_color":"rgba(29,73,185,0.8)","pcode":"0e7b596b","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"lied","ptitle":"躺着的","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"e5ccee5c","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(16,24,224,0.8)","font_color":"rgba(16,24,224,0.8)","pcode":"f680c607","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(16,24,224,0.8)","font_color":"rgba(16,24,224,0.8)","pcode":"b0e380b0","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"crowd","ptitle":"密集物体","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"89cfa650","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(204,111,25,0.8)","font_color":"rgba(204,111,25,0.8)","pcode":"5392b8b5","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(204,111,25,0.8)","font_color":"rgba(204,111,25,0.8)","pcode":"b3dfa657","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"halo","ptitle":"车灯光晕大","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"3509564a","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(242,220,24,0.8)","font_color":"rgba(242,220,24,0.8)","pcode":"ffdcdf95","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(242,220,24,0.8)","font_color":"rgba(242,220,24,0.8)","pcode":"17225aff","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"dark","ptitle":"过暗","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"efd065aa","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(240,81,186,0.8)","font_color":"rgba(240,81,186,0.8)","pcode":"6019b4b1","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(240,81,186,0.8)","font_color":"rgba(240,81,186,0.8)","pcode":"81e23154","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"seperated","ptitle":"无关区域","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"11fa0401","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(246,156,227,0.8)","font_color":"rgba(246,156,227,0.8)","pcode":"c26070f9","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(246,156,227,0.8)","font_color":"rgba(246,156,227,0.8)","pcode":"9868b67a","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"occ_ground_invisible","ptitle":"遮挡地点不可见","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"4c4c9e65","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(178,31,49,0.8)","font_color":"rgba(178,31,49,0.8)","pcode":"0ef1edab","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(178,31,49,0.8)","font_color":"rgba(178,31,49,0.8)","pcode":"0c26922a","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"pc_unclear","ptitle":"点云看不清","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"401d6485","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(27,159,187,0.8)","font_color":"rgba(27,159,187,0.8)","pcode":"343a373b","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(27,159,187,0.8)","font_color":"rgba(27,159,187,0.8)","pcode":"c975aa80","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false},{"pname":"bv_unclear","ptitle":"俯视图看不清","color":"rgba(121,234,102,0.8)","font_color":"rgba(121,234,102,0.8)","pcode":"c37a51e0","type":"select","pvalue":[{"pname":"ture","ptitle":"是","color":"rgba(242,99,142,0.8)","font_color":"rgba(242,99,142,0.8)","pcode":"5af26c88","type":"select","pvalue":[]},{"pname":"false","ptitle":"否","color":"rgba(242,99,142,0.8)","font_color":"rgba(242,99,142,0.8)","pcode":"4bca9470","type":"select","pvalue":[]}],"body_orientation":false,"is_check_all":false}],"intro":"","body_orientation":false,"pre_type":false,"is_track_prop":false,"is_check_all":true}],"amount":1,"isIntro":false,"is_check_all":true}],"preset_type":"","boxConsistent":0}';

$csvPath = "/Users/hejinlong/Desktop/点云/20210108_082438_mkz-08-9245487_sort.csv";

$taskType = 901;

$ydata = new \YunceData\Model\CreatePreData([
    "taskType" => $taskType,
    "taskConfJson" => $taskConf,
]);

$inputArr = [
    "marks" => [
        [
            "tool" => "rect",
            "point" => [
                "left1" => 12,
                "top" => 12,
                "right" => 12,
                "bottom" => 12
            ],
            "props" => [
                "type,pedestrian,11,sitting,ture",
                "type,pedestrian,sitting,false",
                "General attributes of objects,carried,false"
            ],
            "content" => "aaaac",
        ]
    ],
];

$json = $ydata->exportPreDataJson($inputArr);

echo $json;
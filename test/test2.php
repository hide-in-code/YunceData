<?php
/**
 * Created by PhpStorm
 * User: hejinlong
 * Date: 2021/3/9
 * Time: 4:49 PM
 */

require '../vendor/autoload.php';


$taskConf = '{"assist":{"minWidth":1,"minHeight":1},"package_type":1,"fast_mark":0,"is_track":0,"is_point":0,"point_desc":[],"sub_round":[{"name":"车","radius":"50"},{"name":"人","radius":"100"}],"boxsize":[{"name":"车","minWidth":"50","minHeight":"50"},{"name":"人","minWidth":"100","minHeight":"100"}],"full_prop":1,"is_semantic":1,"is_instance":0,"is_panoramic":0,"picture_quality":100,"properties":[{"toolName":"日形框","toolType":"cuboid","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"point","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"rect","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"ellipse","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"polygon","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"parallel","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"line","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"curve","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1},{"toolName":"日形框","toolType":"3drect","is_polygon_filled":1,"is_open_magic":0,"is_open_color":0,"dotLimit":0,"dotLimitPoint":0,"is_dot_limit":0,"is_point_dot_limit":0,"toolColor":"#cccccc","property":[{"pname":"lei xing","ptitle":"类型","color":"rgba(246,156,221,0.8)","font_color":"rgba(246,156,221,0.8)","pcode":"c498fe3d","type":"select","pvalue":[{"pname":"ren","ptitle":"人","color":"rgba(14,22,221,0.8)","font_color":"rgba(14,22,221,0.8)","pcode":"03e32316","type":"select","pvalue":[{"pname":"nan","ptitle":"男","color":"rgba(138,239,148,0.8)","font_color":"rgba(138,239,148,0.8)","pcode":"d07c6baa","type":"select","pvalue":[{"pname":"zhuang tai","ptitle":"状态","color":"rgba(147,247,130,0.8)","font_color":"rgba(147,247,130,0.8)","pcode":"d283f0c1","type":"select","pvalue":[{"pname":"zhi xing","ptitle":"直行","color":"rgba(243,83,179,0.8)","font_color":"rgba(243,83,179,0.8)","pcode":"2757e6f4","type":"select","pvalue":[]},{"pname":"guai wan","ptitle":"拐弯","color":"rgba(192,31,219,0.8)","font_color":"rgba(192,31,219,0.8)","pcode":"d8423807","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"nian ling","ptitle":"年龄","color":"rgba(93,239,116,0.8)","font_color":"rgba(93,239,116,0.8)","pcode":"621b5169","type":"select","pvalue":[{"pname":"1","ptitle":"1","color":"rgba(217,74,13,0.8)","font_color":"rgba(217,74,13,0.8)","pcode":"9659a663","type":"select","pvalue":[]},{"pname":"2","ptitle":"2","color":"rgba(142,211,241,0.8)","font_color":"rgba(142,211,241,0.8)","pcode":"6301f598","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false,"is_check_all":true},{"pname":"nv","ptitle":"女","color":"rgba(110,194,25,0.8)","font_color":"rgba(110,194,25,0.8)","pcode":"612a9a32","type":"select","pvalue":[{"pname":"1 0","ptitle":"10","color":"rgba(115,135,237,0.8)","font_color":"rgba(115,135,237,0.8)","pcode":"d6efdc86","type":"select","pvalue":[]},{"pname":"2 0","ptitle":"20","color":"rgba(241,95,200,0.8)","font_color":"rgba(241,95,200,0.8)","pcode":"78f446cf","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false},{"pname":"che","ptitle":"车","color":"rgba(82,235,152,0.8)","font_color":"rgba(82,235,152,0.8)","pcode":"874911ec","type":"select","pvalue":[{"pname":"jiao che","ptitle":"轿车","color":"rgba(156,242,201,0.8)","font_color":"rgba(156,242,201,0.8)","pcode":"5e877ab6","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(206,114,238,0.8)","font_color":"rgba(206,114,238,0.8)","pcode":"e2997e9d","type":"select","pvalue":[{"pname":"jie duan 1","ptitle":"截断1","color":"rgba(215,35,231,0.8)","font_color":"rgba(215,35,231,0.8)","pcode":"1da6909e","type":"select","pvalue":[]},{"pname":"jie duan 2","ptitle":"截断2","color":"rgba(98,241,75,0.8)","font_color":"rgba(98,241,75,0.8)","pcode":"259171af","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"huang se","ptitle":"黄色","color":"rgba(151,79,243,0.8)","font_color":"rgba(151,79,243,0.8)","pcode":"71302d23","type":"select","pvalue":[]}],"body_orientation":false},{"pname":"s u v","ptitle":"suv","color":"rgba(212,244,159,0.8)","font_color":"rgba(212,244,159,0.8)","pcode":"1e2a88d7","type":"select","pvalue":[{"pname":"hong se","ptitle":"红色","color":"rgba(104,237,126,0.8)","font_color":"rgba(104,237,126,0.8)","pcode":"01231699","type":"select","pvalue":[]},{"pname":"huang se","ptitle":"黄色","color":"rgba(85,167,226,0.8)","font_color":"rgba(85,167,226,0.8)","pcode":"38228db6","type":"select","pvalue":[]}],"body_orientation":false}],"body_orientation":false}],"intro":"","body_orientation":false},{"pname":"wei zhi","ptitle":"位置","color":"rgba(216,220,24,0.8)","font_color":"rgba(216,220,24,0.8)","pcode":"bcebfa73","type":"select","pvalue":[{"pname":"qian","ptitle":"前","color":"rgba(230,162,30,0.8)","font_color":"rgba(230,162,30,0.8)","pcode":"443a705f","type":"select","pvalue":[]},{"pname":"hou","ptitle":"后","color":"rgba(53,189,31,0.8)","font_color":"rgba(53,189,31,0.8)","pcode":"a3f982f1","type":"select","pvalue":[]}],"intro":"","body_orientation":false}],"amount":1,"isIntro":false,"is_check_all":1}],"outside":0,"is_ocr":0,"is_body_orientation":0,"is_rotate_picture":1,"preset_type":"","coco_desc":"","acceptance_method":1,"consecutive_frames":1,"rotate_picture_export_type":0,"overlap":1}';

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
                "left" => 10,
                "top" => 10,
                "right" => 50,
                "bottom" => 50,
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "ellipse",
            "point" => [
                "left" => 70,
                "top" => 70,
                "right" => 100,
                "bottom" => 100,
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "point",
            "point" => [
                "x" => 10,
                "y" => 100
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "polygon",
            "point" => [
                ["x" => 402.3,"y" => 419],["x" => 384.9,"y" => 424.8],["x" => 376.2,"y" => 456.7],["x" => 380.5,"y" => 472.7],["x" => 422.6,"y" => 472.7],["x" => 451.6,"y" => 474.2],["x" => 457.5,"y" => 439.3]
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "parallel",
            "point" => [
                [
                    "x" =>  201.9,
                    "y" =>  270.7
                ], [
                    "x" =>  312,
                    "y" =>  221.4
                ], [
                    "x" =>  321.6,
                    "y" =>  330.9
                ], [
                    "x" =>  211.5,
                    "y" =>  380.2
                ]
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "line",
            "point" => [
                [
                    "x" =>  51.5,
                    "y" =>  493.4
                ], [
                    "x" =>  100.8,
                    "y" =>  466.6
                ], [
                    "x" =>  194.9,
                    "y" =>  479.4
                ]
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "curve",
            "point" => [
                [
                    "x" =>  84.8,
                    "y" =>  509.4
                ], [
                    "x" =>  147.5,
                    "y" =>  513.9
                ], [
                    "x" =>  221.8,
                    "y" =>  544.6
                ], [
                    "x" =>  239,
                    "y" =>  480
                ]
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "cuboid",
            "point" => [
                [
                    "x" =>  97,
                    "y" =>  176
                ], [
                    "x" =>  138.6,
                    "y" =>  176
                ], [
                    "x" =>  138.6,
                    "y" =>  218.9
                ], [
                    "x" =>  97,
                    "y" =>  218.9
                ], [
                    "x" =>  160.3,
                    "y" =>  201
                ], [
                    "x" =>  160.3,
                    "y" =>  211.8
                ]
            ],
            "finshPoints" => [
                [
                    "x" =>  97,
                    "y" =>  176
                ], [
                    "x" =>  138.6,
                    "y" =>  218.9
                ], [
                    "x" =>  160.3,
                    "y" =>  211.8
                ], [
                    "x" =>  160.3,
                    "y" =>  201
                ]
            ],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ],
        [
            "tool" => "3drect",
            "front" =>  [[
                "x" =>  289,
                "y" =>  410.9
            ], [
                "x" =>  350.4,
                "y" =>  410.9
            ], [
                "x" =>  350.4,
                "y" =>  491.5
            ], [
                "x" =>  289,
                "y" =>  491.5
            ]],
            "back" =>  [[
                "x" =>  310.7,
                "y" =>  385.9
            ], [
                "x" =>  372.2,
                "y" =>  385.9
            ], [
                "x" =>  372.2,
                "y" =>  466.6
            ], [
                "x" =>  310.7,
                "y" =>  466.6
            ]],
            "props" => [
                "lei xing,ren,nan,zhuang tai,zhi xing",
                "lei xing,che,jiao che,hong se,jie duan 1",
                "wei zhi,qian"
            ],
            "content" => "aaaac",
        ]
    ],
];

$json = $ydata->exportPreDataJson($inputArr);

echo $json;

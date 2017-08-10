<?php
/**
 * @desc json 相关函数示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 14:25
 */

$arr = [
    'name' => 'zhan',
    'age' => 23,
    'book' => [
        '数学', '英语', '语文'
    ]
];

// 直接进行json编码，一些字符可能会编码成\uXXXX 的样式
$jsonStr1 = json_encode($arr);

var_dump($jsonStr1);

// 使用 JSON_UNESCAPED_UNICODE 常量， 字符将使用 Unicode 字符，让中文得以正常显示
$jsonStr2 = json_encode($arr, JSON_UNESCAPED_UNICODE);

var_dump($jsonStr2);

// 两种json编码方式正常解码都会得到一个对象
$decode1 = json_decode($jsonStr1);
$decode2 = json_decode($jsonStr2);

var_dump($decode1);
var_dump($decode2);

// 第二个参数决定了返回object还是array
$decode3 = json_decode($jsonStr1, true);

var_dump($decode3);

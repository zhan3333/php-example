<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 15:10
 */

$arr = [
    'name' => 'xiaomin',
    'age' => 23
];

// 数组转对象
$obj = json_decode(json_encode($arr));
var_dump($obj);

// 对象转数组
$arr = json_decode(json_encode($obj), true);
var_dump($arr);
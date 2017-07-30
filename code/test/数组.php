<?php
/**
 * 数组
 * User: 39096
 * Date: 2017/7/30
 * Time: 17:13
 */

// 定义

$arr = ['zhan', 'xu', 'zhai'];
//         0      1     2
$arr2 = [
    'name' => 'zhan',
    'age' => 200
];

// 使用
$arr[0];
if (!empty($arr[11000])) {
    $arr[11000];
}

// 赋值

$arr[4] = '4';
$arr['test'] = 'value';
$arr['arr'] = ['arr' => '2'];
$arr[] = 'num';     // 在数组的结尾添加一个值


$arr = [];
for($i = 0; $i < 10; $i ++) {
    $arr[] = $i;
}
var_dump($arr);

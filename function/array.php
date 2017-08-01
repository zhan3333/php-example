<?php
/**
 * @desc 数组常用内置函数
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 16:48
 */



// array()  同 [], 创建一个数组
$arr = array(
    'name' => 'zhan',
    'age' => 24,
    'sex' => '男'
);

// array_keys()  获取数组的所有键
$keys  =array_keys($arr);
var_dump($keys);

$values = array_values($arr);
var_dump($values);

$arr2 = [
    'office' => '程序员'
];

// array_merge 合并多个数组
$arr_merge = array_merge($arr, $arr2);
var_dump($arr_merge);

// 倒序排列数组 array_reverse()
$reverse = array_reverse($arr_merge);
var_dump($reverse);

// 数组操作 pop push shift unshift
echo "\n数组操作\n";
$arr = [
    'zhan',
    'zhai',
    'xu'
];
var_dump($arr);
$pop = array_pop($arr); // 弹出数组末尾的值
var_dump($pop);
var_dump($arr);
array_push($arr, $pop); // 插入一个值到数组末尾
var_dump($arr);
$shift = array_shift($arr); // 弹出数组最开始的值
var_dump($shift);
var_dump($arr);
array_unshift($arr, $shift);    // 向数组开头插入一个值
var_dump($arr);

// sort 自然排序
$arr = ['zhan', 'zhai', 'xu', 'li', 'ai'];
sort($arr);
var_dump($arr);
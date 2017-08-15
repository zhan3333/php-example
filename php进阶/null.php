<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/15
 * Time: 20:32
 */

// 1. 直接使用为定义的变量

// 2. 使用不存在的键对应的值

// 3. 进行过unset操作的变量或数组键

// 4. 直接赋值为null

$arr = [
    'name' => 'tom'
];

var_dump(is_null($arr['age']));

// 将数组的这个值置为空
$a = '123';
unset($a);      // $a => null
unset($arr['name']);

var_dump(is_null($a));
var_dump(is_null($arr['name']));

$b = null;

var_dump(is_null($b));

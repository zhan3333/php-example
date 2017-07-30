<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 13:49
 */

// 定义全局变量
$gName = 'gName';
$name = 'name';


function getUserName () {
    echo $name . PHP_EOL;       // 未定义，不允许直接使用全局变量

    // 使用global声明词全局变量
    global $gName;
    echo $gName . PHP_EOL;      // 已定义，使用了全局变量

    // 定义局部变量
    $name = '函数内名称';

    return $name;
}

echo $name . PHP_EOL;   // 使用全局变量
echo getUserName() . PHP_EOL;       // 使用局部变量
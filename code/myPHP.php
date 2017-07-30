<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 15:53
 */

echo 'hello my php' . PHP_EOL;
echo "hello my php" . PHP_EOL;        // 语句-语法
$printRet = print 'hello print' . PHP_EOL;        // 函数
echo $printRet . PHP_EOL;

// 数组
$arr = [
    'zhan',
    3,
    ['a', 'b', 'c']
];


// 对象 类
class User {
    public $name = 'zhan';
}

$user = new User();

$b = false;
print_r($arr);
print_r($user);
print_r($b);        // true时输出1， false时输出 空

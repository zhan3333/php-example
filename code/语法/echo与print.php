<?php

// echo与print都输出字符串

$str = 'hello word';

// echo
//$echoRet = echo $str;   // 语法错误 echo是一个语句，不是一个方法

// print
$printRet = print $str; // 正确，是一个函数

// print_r 输出变量的详细信息，可以答应字符串，对象数组等
$arr = [1, 2, 3 , 'zhan'];
echo $arr;
print $arr;         // 输出一个警告
print_r($arr);


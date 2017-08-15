<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/15
 * Time: 20:33
 */

function fun44 ($name, $age) {
    echo "my name is $name, age is $age" . PHP_EOL;
}

$str = 'fun44';

// fun44('tom', 23);

// 判断函数是否是可以调用的
if (is_callable($str)) {
    call_user_func($str, 'tom', 23);
    call_user_func_array($str, ['tom', 23]);
}


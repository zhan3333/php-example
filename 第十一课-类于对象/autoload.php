<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 21:47
 */

//include 'test.php';
//require 'test.php';

spl_autoload_register(function ($class) {
    // 给了我们一个机会
    // 类在未导入的情况下会被调用
    echo "$class not found" . PHP_EOL;
    include 'test.php';
    echo "$class is load" . PHP_EOL;
});

// 触发条件： 类未导入而使用了它
$light = new Light();
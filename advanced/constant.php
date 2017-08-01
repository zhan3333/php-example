<?php
/**
 * @desc 常量与预定义常量
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 15:58
 */

// 常量以字母或者下划线组成，没有$符号，是否大小写敏感看具体的设置

// 定义一个大小写敏感的常量
define('MY_NAME', 'zhan');
echo MY_NAME . PHP_EOL;
//echo my_NAME . PHP_EOL;       // 报出警告

// 定义一个大小写不敏感的常量
define('NEW_NAME', 'zhan', true);
echo new_name . PHP_EOL;

if (!defined('NEW_NAME')) {
    define('NEW_NAME', 'test', true);
}

// 预定义常量指的是php本身已经定义使用的一些常量
echo 'php版本为： ' . PHP_VERSION . PHP_EOL; // 这两个都是
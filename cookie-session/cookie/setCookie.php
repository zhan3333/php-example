<?php
/**
 * @desc 测试cookie
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 14:45
 */

// 设置cookie到浏览器中
$ret = setcookie('name', 'zhan');

var_dump($ret);

// 取cookie
$name = $_COOKIE['name'];

var_dump($name);

// 删除cookie
$ret = setcookie('name', '', time() - 3600);
var_dump($ret);
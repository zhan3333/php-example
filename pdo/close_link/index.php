<?php
/**
 * @desc 关闭一个连接
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:24
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

/**
 * 创建连接后，有两种方式断开连接
 * 1. 脚本执行完毕，自动断开连接
 * 2. 将PDO实例变量赋值为NULL
 */

$db = null; // 释放连接
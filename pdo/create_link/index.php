<?php
/**
 * @desc 创建连接
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:18
 */

/*
 * 创建PDO对象，需要数据库类型、主机地址、数据库名、用户名、密码 参数
 * 在创建对象时，若发生错误，必定会抛出一个 PDOException 异常
 * 在创建链接时，必须要捕获异常
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

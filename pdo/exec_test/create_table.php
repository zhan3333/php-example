<?php
/**
 * @desc exec() 创建表操作
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:41
 */

// 创建连接
try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

$result = $db->exec('create table USER (`id` INT AUTO_INCREMENT, `name` VARCHAR(40) not null, `age` INT(3) not null,  PRIMARY KEY (`id`))');

/**
 * result:
 * exec 执行失败时会返回false
 * exec 创建表成功时返回受影响的行数0
 *
 * errorInfo()
 * 执行成功返回
 * [
 *  0 => '00000',
 *  1 => NULL,
 *  2 => NULL
 * ]
 * 执行失败返回
 * [
 *  0 => '42000',       // pdo错误码
 *  1 => 1064,          // mysql错误码
 *  2 => 'You have an error in your SQL ...',            // mysql错误消息
 * ]
 */

var_dump($result);
var_dump($db->errorInfo());
var_dump($db->errorCode());
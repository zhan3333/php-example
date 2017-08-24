<?php
/**
 * 通过query() 创建表
 * User: 39096
 * Date: 2017/8/24
 * Time: 22:09
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

/**
 * 通过query创建一个表
 */
$result = $db->query("create table user_copy (`id` INT AUTO_INCREMENT, `name` VARCHAR(40) not null, `age` INT(3) not null,  PRIMARY KEY (`id`))");

var_dump($result->rowCount());

/**
 * query() 与 exec() 方法有很多类似之处
 * 区别在于
 * query()方法偏向于查询
 * exec() 偏向于执行
 */
<?php
/**
 * @desc query方法执行查询
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:03
 */

/**
 * query() 执行一个SQL语句，返回一个PDOStatement对象
 * 类似于prepare() execute() 的结合体
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// 获取PDOStatement对象
$result = $db->query("select * from user");

// 获取所有结果
$users = $result->fetchAll();

var_dump($users);

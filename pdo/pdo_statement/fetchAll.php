<?php
/**
 * fetchAll() 返回结果集中所有行的数组
 * User: 39096
 * Date: 2017/8/24
 * Time: 19:44
 */

/**
 * fetchAll() 返回结果集中所有行的数组
 * 一次性返回查询结果
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

$result = $db->query("select * from USER");
var_dump($result->fetchAll());


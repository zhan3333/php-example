<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/24
 * Time: 22:05
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// 获取PDOStatement对象
$result = $db->query("insert into user values (null, 'tom', 80)");


var_dump($result->fetchAll());  // -> []

// 获取受影响的行数
var_dump($result->rowCount());  // -> 1
<?php
/**
 * fetchObject()
 * User: 39096
 * Date: 2017/8/24
 * Time: 19:49
 */

/**
 * fetchObject() 取下一行作为一个对象返回
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

$result = $db->query("select * from USER");

while ($row = $result->fetchObject()) {
    var_dump($row);
}
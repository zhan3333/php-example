<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:58
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

$result = $db->exec("insert into USER values (null, 'zhan', 23)");

var_dump($result);              // -> 1

/**
 * -> [
 *  '00000',
 *  NULL,
 *  NULL
 * ]
 */
var_dump($db->errorInfo());
var_dump($db->errorCode());     // -> '00000'
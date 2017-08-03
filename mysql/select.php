<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 15:54
 */


$username = 'root';
$password = 'z283779377g';
$host = 'localhost';
$dbname = 'test';

// 连接到数据库
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$id = 1;

$sql = "select * from users";

$ret = $db->query($sql);

while ($row = $ret->fetchObject()) {
    var_dump($row);
}

$db = null;
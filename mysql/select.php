<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 15:54
 */


$username = 'root';
$password = 'Z283779377g';
$host = 'localhost';
$dbname = 'example';

// 连接到数据库
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

$sql = "select * from users";
$ret = $db->query($sql);
var_dump($ret->fetchObject());
//while ($row = $ret->fetch()) {
//    var_dump($row);
//}

$db = null;
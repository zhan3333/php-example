<?php
/**
 * @desc 连接到数据库
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 15:50
 */

$username = 'root';
$password = 'Z283779377g';
$host = 'localhost';
$dbname = 'example';

// 连接到数据库
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// 断开连接
$db = null;
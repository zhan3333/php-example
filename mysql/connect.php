<?php
/**
 * @desc 连接到数据库
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 15:50
 */

$username = 'root';
$password = 'z283779377g';
$host = 'localhost';
$dbname = 'test';

// 连接到数据库
$db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// 断开连接
$db = null;
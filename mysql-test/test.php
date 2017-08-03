<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/3
 * Time: 22:29
 */
require './BaseResponse.php';

$username = 'root';
$password = 'z283779377g';
$host = 'localhost';
$dbname = 'test';

$br = new BaseResponse($username, $password, $dbname, $host);
$br->setTableName('users');

// 根据id查询
$ret = $br->find(1);
var_dump($ret);

// 条件查询结果
$ret = $br->get();
var_dump($ret);
$ret = $br->get([['id', '=', 1]]);
var_dump($ret);
$ret = $br->get([['id', '=', 1], ['name', '=', 'zhanguang']]);
var_dump($ret);

$ret = $br->update(['name' => 'new-zhan'], [['id', '=', 1]]);
var_dump($ret);     // true

$ret = $br->insert(['name' => 'xiaomin', 'age' => 23, 'sex' => '女']);
var_dump($ret);     // true

$ret = $br->delete([['id', '=', '5']]);
var_dump($ret);     // true

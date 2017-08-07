<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 17:21
 */

require __DIR__ . '/lib/BaseResponse.php';

$username = 'root';
$password = 'z283779377g';
$host = 'localhost';
$dbname = 'test';

$ur = new BaseResponse($username, $password, $dbname, $host);
$ur->setTableName('users');
$user = $ur->find(1);
var_dump($user);

$users = $ur->get([['name', '=', 'zhan01']]);
var_dump($users);

$ret = $ur->insert([
    'name' => 'zhan01',
    'age' => '24',
    'sex' => '男',
    'birthday' => date('Y-m-d'),
]);
var_dump($ret);

$ret = $ur->update(['name' => 'zhan-new'], [['id', '=', '2']]);
var_dump($ret);

$ret = $ur->delete([['name', '=', 'zhan-new']]);
var_dump($ret);
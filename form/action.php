<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/1
 * Time: 22:02
 */
// $_GET $_POST

if (empty($_POST['username']) || empty($_POST['password'])) {
    exit('账号或密码未填写');
}

$username = $_POST['username'];
$password = $_POST['password'];

if (strlen($username) < 4 || strlen($password) < 6) {
    exit('账号或密码过短');
}

if ($username == 'zhan' && $password == '123456') {
    exit('登陆成功');
} else {
    exit('账号或密码错误');
}
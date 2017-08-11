<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 16:21
 */
$password = '123456';

// 进行加密
$hash_password = password_hash($password, PASSWORD_DEFAULT);

var_dump($hash_password);

// 验证密码
var_dump(password_verify($password, $hash_password));
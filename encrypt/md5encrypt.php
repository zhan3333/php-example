<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 15:53
 */

$password = 123456;

// 简单md5加密
$md5 = md5($password);

var_dump($md5);

// 加盐md5加密;

$salt = '57646';

$salt_md5 = md5(md5($password) . $salt);

var_dump($salt_md5);


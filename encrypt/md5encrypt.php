<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 15:53
 */

$password = 'z28377937g';

// 简单md5加密
// 很容易被破解
$md5 = md5($password);

var_dump($md5); // 长度固定32

// 加盐md5加密;

$salt = '57646';

$salt_md5 = md5(md5($password) . $salt);

var_dump($salt_md5);


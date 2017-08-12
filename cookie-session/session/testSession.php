<?php
/**
 * 测试session值
 * User: 39096
 * Date: 2017/8/12
 * Time: 9:43
 */

// 设定session_id给客户端

/**
 * 1. 开启session
 * 2. 检测 $_GET, $_POST, $_COOKIE 中是否有session_id这个键值存在
 * 如果存在的话，session_id会复用
 * 3. 根据session_id 获取$_SESSION 值并设置好
 */
session_start();

// 判断session_id的ip是否与访问者的ip对应
var_dump(session_id());

var_dump($_SESSION);

// session 值的储存

//$_SESSION['isLogin'] = 1;

// 脚本结束时，$_SESSION 内的值将会被保存到 session 文件中
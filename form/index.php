<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/1
 * Time: 22:17
 */
if ($_POST) {
    // 登陆操作
    if (empty($_POST['username']) || empty($_POST['password'])) {
        to_login_page('账号或密码未填写');
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (strlen($username) < 4 || strlen($password) < 6) {
        to_login_page('账号或密码过短');
    }

    if ($username == 'zhan' && $password == '123456') {
        header('Location: home.php');
    } else {
        to_login_page('账号或密码错误');
    }
} else {
    // 显示登录界面
    $loginHtml = <<<LOGIN
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1 style="align-content: center">登陆</h1>
<form action="index.php" method="post">
    用户名: <input type="text" name="username"><br/>
    密码  ： <input type="password" name="password"><br/>
    <input type="submit" value="登陆">
</form>
</body>
</html>
LOGIN;
    echo $loginHtml;
}

/**
 * 显示跳转到登陆页面链接，并且结束脚本
 * @param string $msg
 */
function to_login_page($msg = '未知错误') {
    echo $msg . "<br/><a href='index.php'>返回登陆</a>";
    exit;
}
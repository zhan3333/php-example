<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 16:32
 */

session_start();

if ($_SESSION['isLogin']) {
    echo '您已经登陆过啦 <a href="index.php">进入首页</a>';
    exit();
}

if ($_POST) {
    if (empty($_POST['username'])) {
        echo '用户名不允许为空 <a href="login.php">返回登陆</a>';
        exit;
    }
    if (empty($_POST['password'])) {
        echo '密码不允许为空 <a href="login.php">返回登陆</a>';
        exit;
    }
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $hash_password = file_get_contents('password.txt');
    $check_username = file_get_contents('username.txt');

    if ($username != $check_username) {
        echo '账号错误 <a href="login.php">返回登陆</a>';
        exit;
    }
    if (password_verify($password, $hash_password)) {
        // 登陆成功
        $_SESSION['isLogin'] = 1;
        echo '登陆成功 <a href="index.php">前往首页</a>';
        exit;
    } else {
        echo '密码错误 <a href="login.php">返回登陆</a>';
    }
} else {
    echo "<html>
<head>
    <title>登陆模块</title>
</head>
<body>
<form action='login.php' method='post'>
    用户名: <input type='text' name='username'>
    密码： <input type='password' name='password'>
    <input type='submit' value='登陆'>
</form>
</body>
</html>";
}
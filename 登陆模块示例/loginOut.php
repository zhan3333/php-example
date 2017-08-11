<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 16:45
 */
session_start();

if ($_SESSION['isLogin'] == 1) {
    $_SESSION['isLogin'] = 0;
    echo '退出登陆成功 <a href="login.php">返回登陆</a>';
    exit();
} else {
    echo '您还没有登陆呢 <a href="login.php">返回登陆</a>';
    exit;
}
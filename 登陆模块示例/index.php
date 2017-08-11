<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 16:38
 */

session_start();

if ($_SESSION['isLogin']) {
    echo '<h1 style="text-align: center;">首页</h1>';
    echo '您已经登陆成功啦 <a href="loginOut.php">退出登陆</a>';
    exit;
} else {
    echo '您还未登陆 <a href="login.php">返回登陆</a>';
    exit();
}
<?php
/**
 * @desc session 测试
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 15:10
 */

// 判断会话状态
if (session_status() == PHP_SESSION_NONE) {
    session_id(12345678);     // 设置session_id值
    session_start();    // 设置session_id到cookie中
}
$_SESSION['123'] = 'name';  // 设置session值

var_dump($_SESSION);        // 打印cookie值s
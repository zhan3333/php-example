<?php
/**
 * 入口文件
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:28
 */

// 用来加载文件

require __DIR__ . '/BaseResponse.php';  // 加载数据库操作文件

$username = 'root';
$password = 'z283779377g';
$dbname = 'school';

// 创建一个数据库操作对象
$br_student = new BaseResponse($username, $password, $dbname);
$br_student->setTableName('students');
$br_student->setDebug(true);

/**
 * 显示信息
 * @param string $msg 消息
 * @param string $href_content 跳转显示
 * @param string $href_url 跳转url
 * @param bool $exit 退出脚本
 */
function show_message ($msg, $href_content, $href_url, $exit = true) {
    echo "$msg <a href='$href_url'>$href_content</a>";
    if ($exit) exit;
}
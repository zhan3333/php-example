<?php
/**
 * 所有文件的起始文件
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:15
 */

require_once __DIR__ . '/BaseResponse.php';
define('ROOT_PATH', realpath('./../') . '/');       // 项目根目录
define('STUDENTS_TABLE', 'students');
define('ADMINS_TABLE', 'admins');

$username = 'root';
$password = 'z283779377g';
$host = 'localhost';
$dbname = 'test';

// 创建数据库连接
$student_br = new BaseResponse($username, $password, $dbname, $host);
$student_br->setTableName(STUDENTS_TABLE);
$student_br->setDebug(true);

/**
 * 显示消息并终止脚本
 * @param string $msg
 * @param string $href
 * @param string $href_url
 */
function show_message($msg = '', $href = '', $href_url = '') {
    echo $msg . " <a href='$href_url'>$href</a>";
    exit;
}
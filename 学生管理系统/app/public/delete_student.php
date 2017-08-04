<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:22
 */
require __DIR__ . '/../lib/init.php';

$id = $_GET['student_id'];
$ret = $student_br->delete([['id', '=', $id]]);
if ($ret) {
    show_message('删除成功', '返回列表', 'show_student_list.php');
} else {
    show_message('删除失败', '返回列表', 'show_student_list.php');
}
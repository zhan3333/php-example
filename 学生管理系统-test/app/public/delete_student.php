<?php
/**
 * 删除学生信息
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:30
 */

require __DIR__ . '/../lib/init.php';

$id = $_GET['id'];

if ($id) {
    // 执行删除操作
    $ret = $br_student->delete([['id', '=', $id]]);
    if ($ret) {
        // 删除成功
        show_message('删除成功', '显示列表', 'show_student_list.php');
    } else {
        // 删除失败
        show_message('删除失败', '显示列表', 'show_student_list.php');
    }
} else {
    show_message('', '显示列表', 'show_student_list.php');
}
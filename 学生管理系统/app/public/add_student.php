<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:22
 */

require __DIR__ . '/../lib/init.php';

if ($_POST) {
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $birthday = trim($_POST['birthday']);
    $id_card = trim($_POST['id_card']);
    $student_id = trim($_POST['student_id']);
    $admission_time = trim($_POST['admission_time']);
    $profession = trim($_POST['profession']);

    // todo 数据验证

    $ret = $student_br->insert([
        'name' => $name,
        'sex' => $sex,
        'birthday' => $birthday,
        'id_card' => $id_card,
        'student_id' => $student_id,
        'admission_time' => $admission_time,
        'profession' => $profession
    ]);
    if ($ret) {
        show_message('添加成功', '返回列表', 'show_student_list.php');
    } else {
        show_message('添加失败', '返回添加', 'add_student.php');
    }
} else {
    echo <<<TAG
<html>
<head>
    <title>添加学生</title>
</head>    
<body>
<form action="add_student.php" method="post">
<table>
<tr>
    <td>姓名：</td>
    <td><input type="text" name="name"></td>
</tr>
<tr>
    <td>性别：</td>
    <td><input type="text" name="sex"></td>
</tr>
<tr>
    <td>生日：</td>
    <td><input type="date" name="birthday"></td>
</tr>
<tr>
    <td>身份证：</td>
    <td><input type="text" name="id_card"></td>
</tr>
<tr>
    <td>学号：</td>
    <td><input type="text" name="student_id"></td>
</tr>
<tr>
    <td>入学时间：</td>
    <td><input type="date" name="admission_time"></td>
</tr>
<tr>
    <td>专业：</td>
    <td><input type="text" name="profession"></td>
</tr>
<tr>
    <td><input type="submit" value="确认"></td>
    <td></td>
</tr>
</table>
    
</form>
</body>
</html>
TAG;
}
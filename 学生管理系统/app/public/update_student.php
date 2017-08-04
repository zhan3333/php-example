<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:22
 */

require __DIR__ . '/../lib/init.php';

if ($_POST) {
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $birthday = trim($_POST['birthday']);
    $id_card = trim($_POST['id_card']);
    $student_id = trim($_POST['student_id']);
    $admission_time = trim($_POST['admission_time']);
    $profession = trim($_POST['profession']);

    var_dump($_POST);

    // todo 数据验证

    $ret = $student_br->update([
        'name' => $name,
        'sex' => $sex,
        'birthday' => $birthday,
        'id_card' => $id_card,
        'student_id' => $student_id,
        'admission_time' => $admission_time,
        'profession' => $profession
    ], [['id', '=', $id]]);
    if ($ret) {
        show_message('修改成功', '返回列表', 'show_student_list.php');
    } else {
        show_message('修改失败', '返回修改', "update_student.php?id=$id");
    }
} else {
    $id = $_GET['id'];
    $student = $student_br->find($id);
    echo <<<TAG
<html>
<head>
    <title>修改学生信息</title>
</head>    
<body>
<form action="update_student.php" method="post">
<input type="hidden" name="id" value="$student->id">
<table>
<tr>
    <td>编号：</td>
    <td>$student->id</td>
</tr>
<tr>
    <td>姓名：</td>
    <td><input type="text" name="name" value="$student->name"></td>
</tr>
<tr>
    <td>性别：</td>
    <td><input type="text" name="sex" value="$student->sex"></td>
</tr>
<tr>
    <td>生日：</td>
    <td><input type="date" name="birthday" value="$student->birthday"></td>
</tr>
<tr>
    <td>身份证：</td>
    <td><input type="text" name="id_card"  value="$student->id_card"></td>
</tr>
<tr>
    <td>学号：</td>
    <td><input type="text" name="student_id"  value="$student->student_id"></td>
</tr>
<tr>
    <td>入学时间：</td>
    <td><input type="date" name="admission_time"  value="$student->admission_time"></td>
</tr>
<tr>
    <td>专业：</td>
    <td><input type="text" name="profession" value="$student->profession"></td>
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
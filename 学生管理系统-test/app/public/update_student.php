<?php
/**
 * 修改学生信息
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:29
 */

require __DIR__ . '/../lib/init.php';

if ($_POST) {
    // 提交数据处理
    $id = trim($_POST['id']);
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $birthday = trim($_POST['birthday']);
    $id_card = trim($_POST['id_card']);
    $student_id = trim($_POST['student_id']);
    $admission_time = trim($_POST['admission_time']);
    $profession = trim($_POST['profession']);

    $ret = $br_student->update([
        'name' => $name,
        'sex' => $sex,
        'birthday' => $birthday,
        'id_card' => $id_card,
        'student_id' => $student_id,
        'admission_time' => $admission_time,
        'profession' => $profession
    ], [['id', '=', $id]]);

    if ($ret) {
        // 编辑成功
        show_message('编辑成功', '查看列表', 'show_student_list.php', false);
        show_message('', '查看详情', "show_student_detail.php?id=$id");
    } else {
        // 编辑失败
        show_message('编辑失败', '查看列表', 'show_student_list.php');
    }

} else {
    $id = $_GET['id'];
    if ($id) {
        $student = $br_student->find($id);
    }
    if (!empty($student)) {
        // 页面显示
        echo "<html>
<head>
    <title>编辑学生信息</title>
</head>
<body>
<!--显示标题-->
<h1 style='text-align: center'>编辑学生信息</h1>

<!--添加表单-->
<form action='update_student.php' method='post'>
    <input type='hidden' value='$student->id' name='id'>
    <table>
        <tr>
            <td>编号</td>
            <td>$student->id</td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type='text' name='name' value='$student->name'></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input type='text' name='sex' value='$student->sex'></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type='date' name='birthday' value='$student->birthday'></td>
        </tr>
        <tr>
            <td>身份证号</td>
            <td><input type='text' name='id_card'  value='$student->id_card'></td>
        </tr>
        <tr>
            <td>学号</td>
            <td><input type='text' name='student_id'  value='$student->student_id'></td>
        </tr>
        <tr>
            <td>入学时间</td>
            <td><input type='date' name='admission_time'  value='$student->admission_time'></td>
        </tr>
        <tr>
            <td>专业</td>
            <td><input type='text' name='profession'  value='$student->profession'></td>
        </tr>
        <tr>
            <td><input type='submit' value='提交'></td>
            <td><input type='reset' value='重置'></td>
        </tr>
    </table>
</form>

</body>
</html>
    ";
    } else {
        show_message('用户不存在', '返回列表', 'show_student_list.php');
    }

}
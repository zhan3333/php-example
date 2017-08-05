<?php
/**
 * 添加学生信息
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:29
 */

require __DIR__ . '/../lib/init.php';

if ($_POST) {
    // 提交数据处理
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $birthday = trim($_POST['birthday']);
    $id_card = trim($_POST['id_card']);
    $student_id = trim($_POST['student_id']);
    $admission_time = trim($_POST['admission_time']);
    $profession = trim($_POST['profession']);

    $ret = $br_student->insert([
        'name' => $name,
        'sex' => $sex,
        'birthday' => $birthday,
        'id_card' => $id_card,
        'student_id' => $student_id,
        'admission_time' => $admission_time,
        'profession' => $profession
    ]);

    if ($ret) {
        // 创建成功
        show_message('创建成功', '查看列表', 'show_student_list.php');
    } else {
        // 创建失败
        show_message('创建失败', '继续添加', 'add_student.php');
    }

} else {
    // 页面显示
    echo "<html>
<head>
    <title>添加学生信息</title>
</head>
<body>
<!--显示标题-->
<h1 style='text-align: center'>学生信息列表</h1>

<!--添加表单-->
<form action='add_student.php' method='post'>
    <table>
        <tr>
            <td>姓名</td>
            <td><input type='text' name='name'></td>
        </tr>
        <tr>
            <td>性别</td>
            <td><input type='text' name='sex'></td>
        </tr>
        <tr>
            <td>生日</td>
            <td><input type='date' name='birthday'></td>
        </tr>
        <tr>
            <td>身份证号</td>
            <td><input type='text' name='id_card'></td>
        </tr>
        <tr>
            <td>学号</td>
            <td><input type='text' name='student_id'></td>
        </tr>
        <tr>
            <td>入学时间</td>
            <td><input type='date' name='admission_time'></td>
        </tr>
        <tr>
            <td>专业</td>
            <td><input type='text' name='profession'></td>
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
}
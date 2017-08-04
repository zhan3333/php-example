<?php
/**
 * 显示学生列表
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:21
 */
require __DIR__ . '/../lib/init.php';

if ($_POST) {

} else {
    $student_list = $student_br->get(); // 学生列表
    echo <<<TAG1
<html>
<head>
    <title>学生信息列表</title>
</head>
<body>
<h1 style="text-align: center;">学生信息列表</h1>
<table border="1px" style="width: 100%;">
    <tr>
        <td>编号</td>
        <td>姓名</td>
        <td>性别</td>
        <td>生日</td>
        <td>身份证号</td>
        <td>学号</td>
        <td>入学时间</td>
        <td>专业</td>
        <td>操作</td>
    </tr>
    
TAG1;

// 输入表格
foreach ($student_list as $student) {
    echo "<tr>";
    echo "
        <td>{$student->id}</td>
        <td>{$student->name}</td>
        <td>{$student->sex}</td>
        <td>{$student->birthday}</td>
        <td>{$student->id_card}</td>
        <td>{$student->student_id}</td>
        <td>{$student->admission_time}</td>
        <td>{$student->profession}</td>
        <td>
            <a href='update_student.php?id={$student->id}'><button>修改</button></a>
            <a href='delete_student.php?id={$student->id}'><button>删除</button></a>
        </td>
    ";
    echo "</tr>";
}

    echo <<<TAG2
</table>
<a href='add_student.php'><button type="button">添加学生信息</button></a>
</body>
</html>
TAG2;
}
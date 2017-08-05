<?php
/**
 * 学生信息详情
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:30
 */

require __DIR__ . '/../lib/init.php';

$id = $_GET['id'];

if ($id) {
    // 显示详情
    $student = $br_student->find($id);
    echo "<html>
<head>
    <title>用户信息详情</title>
</head>
<body>
<!--显示标题-->
<h1 style='text-align: center'>学生信息列表</h1>

<!-- 显示学生信息 -->
<div style='width: 100%; text-align: center;'>
<table border='1px'>
    <tr>
        <td>编号</td>
        <td>$student->id</td>
    </tr>
    <tr>
        <td>姓名</td>
        <td>$student->name</td>
    </tr>
    <tr>
        <td>性别</td>
        <td>$student->sex</td>
    </tr>
    <tr>
        <td>学号</td>
        <td>$student->student_id</td>
    </tr>
    <tr>
        <td>身份证</td>
        <td>$student->id_card</td>
    </tr>
    <tr>
        <td>入学时间</td>
        <td>$student->admission_time</td>
    </tr>
    <tr>
        <td>生日</td>
        <td>$student->birthday</td>
    </tr>
    <tr>
        <td>专业</td>
        <td>$student->profession</td>
    </tr>
</table>
<a href='update_student.php?id=$student->id'><button>编辑</button></a>
<a href='delete_student.php?id=$student->id'><button>删除</button></a>
<a href='show_student_list.php'><button>返回列表</button></a>
</div>

</body>
</html>";
} else {
    show_message('', '显示列表', 'show_student_list.php');
}
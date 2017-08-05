<?php
/**
 * 查看学生列表
 * User: 39096
 * Date: 2017/8/5
 * Time: 7:29
 */

require __DIR__ . '/../lib/init.php';

$student_list = $br_student->get();

echo "<html>
<head>
    <title>学生信息列表</title>
</head>
<body>
<!--显示标题-->
<h1 style='text-align: center'>学生信息列表</h1>

<!--学生信息列表-->
<table border='1px' style='width: 100%;'>
    <tr>
        <td>编号</td>
        <td>名字</td>
        <td>性别</td>
        <td>专业</td>
        <td>操作</td>
    </tr>
";

foreach ($student_list as $student) {
    echo "<tr>
    <td>$student->id</td>
    <td>$student->name</td>
    <td>$student->sex</td>
    <td>$student->profession</td>
    <td>
        <a href='update_student.php?id=$student->id'><button>编辑</button></a>
        <a href='delete_student.php?id=$student->id'><button>删除</button></a>
        <a href='show_student_detail.php?id=$student->id'><button>详情</button></a>
    </td>
</tr>";
}


echo "
</table>

<!--显示添加按钮-->
<a href='add_student.php'><button>添加学生信息</button></a>

</body>
</html>
";
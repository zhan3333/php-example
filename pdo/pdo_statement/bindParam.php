<?php
/**
 * @desc bindParam()方法绑定参数
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:40
 */

/**
 * bindParam(mix $param, mixed &$var, [int $data_type = PDO::PARAM_STR, [, int $length [, mixed $driver_options]]])
 * 绑定一个php变量到用作预处理的SQL语句中的对应命名占位符或问好占位符
 * 参数：
 * 当使用命名占位符时：
 * $param 为占位符名称
 * 当使用占位符时:
 * $param 为从1开始的的参数位置
 *
 * $var: 变量名
 *
 * $data_type: PDO::PARAM_* 常量明确指定参数的类型
 *
 * $length: 数据类型的长度
 *
 * 设置成功返回true， 失败返回false
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// : 号形式
$sql = "select * from user where id = :id";
$sth1 = $db->prepare($sql);
$id = 1;
$sth1->bindParam(':id', $id);
$sth1->execute();
var_dump($sth1->fetchAll());

// ? 号形式
$sql = "select * from user where id = ? and age = ?";
$sth2 = $db->prepare($sql);
$id = 1;
$sth2->bindParam(1, $id);
$age = 23;
$sth2->bindParam(2, $age);
$sth2->execute();
var_dump($sth2->fetchAll());

/**
 * 错误的示例
 * query 按顺序执行了prepare 和 execute
 * bind操作需要在prepare和execute中间
 *
 * query 不接受占位符的sql语句
 */
$state = $db->query('select * from user where id = 2');
$id = 3;
$state->bindParam(':id', $id);      // 不起任何作用的
var_dump($state->fetchAll());

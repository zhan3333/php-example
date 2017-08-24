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
$sql = "select * from USER where id = :id";
$sth1 = $db->prepare($sql);
$id = 1;
$sth1->bindParam(':id', $id);
$sth1->execute();
var_dump($sth1->fetchAll());

// ? 号形式
$sql = "select * from USER where id = ?";
$sth2 = $db->prepare($sql);
$id = 1;
$sth2->bindParam(1, $id);
$sth2->execute([1]);
var_dump($sth2->fetchAll());

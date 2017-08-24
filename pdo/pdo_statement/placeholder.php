<?php
/**
 * @desc 占位符使用讲解
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:33
 */

/**
 * 占位符使用于 prepare() execute() 模式中
 * 通常有 : 命名占位符 和 ? 问号占位符 两种形式
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
$sth1->execute([':id' => 1]);
var_dump($sth1->fetchAll());

// ? 号形式
$sql = "select * from USER where id = ?";
$sth2 = $db->prepare($sql);
$sth2->execute([1]);
var_dump($sth2->fetchAll());


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

/**
 *  fetchAll ()
 * 第一个参数，
 * 使用 FETCH_NAMED 时，返回键值对数组
 * 使用 FETCH_NUM 时，返回索引数组
 * 使用 FETCH_OBJ 时， 返回对象
 */

// : 号形式 (命名占位符)
$sql = "select * from user where id = :wangdalu";
$sth1 = $db->prepare($sql);
$sth1->execute([':wangdalu' => 1]);
var_dump($sth1->fetchAll($db::FETCH_NAMED));

// ? 号形式 (问号占位符)
$sql = "select * from user where id = ?";
$sth2 = $db->prepare($sql);
$sth2->execute([2]);
var_dump($sth2->fetchAll($db::FETCH_NUM));


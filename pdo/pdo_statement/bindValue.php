<?php
/**
 * @desc bindValue() 绑定参数
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:55
 */

/**
 * 与 bindParam() 类似，不同的是这里的值不要求为变量
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
$sth1->bindValue(':id', 1);
$sth1->execute();
var_dump($sth1->fetchAll());

// ? 号形式
$sql = "select * from USER where id = ?";
$sth2 = $db->prepare($sql);
$sth2->bindValue(1, 1);
$sth2->execute([1]);
var_dump($sth2->fetchAll());
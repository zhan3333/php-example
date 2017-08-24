<?php
/**
 * @desc debugDumpParams
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 18:18
 */

/**
 * debugDumpParams() 打印一条预处理语句
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
$sth1->debugDumpParams();

echo PHP_EOL;

// ? 号形式
$sql = "select * from USER where id = ?";
$sth2 = $db->prepare($sql);
$id = 1;
$sth2->bindParam(1, $id);
$sth2->execute([1]);
$sth2->debugDumpParams();

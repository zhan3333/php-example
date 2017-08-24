<?php
/**
 * @desc bindColumn() 讲解
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:57
 */

/**
 * bindColumn() 绑定php变量到查询结果中
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// : 号形式
$sql = "select * from USER where name = :name";
$sth1 = $db->prepare($sql);
$sth1->bindValue(':name', 'zhan');
$sth1->bindColumn('id', $id);
$sth1->execute();
var_dump($sth1->fetchAll());
var_dump($id);  // 赋值到最后一个行的id列值

$sql = "select * from USER where name = :name";
$sth1 = $db->prepare($sql);
$sth1->bindValue(':name', 'zhan');
$sth1->bindColumn('id', $id);
$sth1->execute();
while ($row = $sth1->fetch()) {
    $row_str = json_encode($row);
    echo "row is $row_str, id is $id" . PHP_EOL;
}
var_dump($id);  // 赋值到最后一个行的id列值
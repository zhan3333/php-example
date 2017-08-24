<?php
/**
 * @desc fetchColumn()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 18:11
 */

/**
 * fetchColumn([int $column_number = 0])方法从结果集的一行中返回单独一列
 * 如果没有，返回false
 * $column_number 行数，从0开始， 默认为0
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

$state = $db->query("select * from USER");

// 循环取出 单行
while ($name = $state->fetchColumn(1)) {
    echo "column is $name" . PHP_EOL;
}

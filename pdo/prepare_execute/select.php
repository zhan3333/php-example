<?php
/**
 * @desc 执行查询方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 16:27
 */

/**
 * prepare()    // 准备sql语句
 * execute()    // 执行sql语句
 * fetchAll()   // 获取结果
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// 冒号用于execute时替换字符串
$sql = "select * from USER where age = :age";

// 准备sql, 返回PDOStatement (声明)
$sth = $db->prepare($sql);

// 执行 PDOStatement, 并传入参数
// 执行成功返回true， 失败返回 false
$executeRet = $sth->execute([':age' => 23]);

// 执行结果
var_dump($executeRet);

// 获取所有结果
$result = $sth->fetchAll();

// 打印结果
var_dump($result);

// 执行非查询操作
$sth = $db->prepare("insert into USER values (null, :name, :age)");
$executeRet = $sth->execute([':name' => 'zhan', ':age' => 23]);
$result = $sth->fetchAll();
var_dump($executeRet);  // -> true
var_dump($result);      // -> []
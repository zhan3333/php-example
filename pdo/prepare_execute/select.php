<?php
/**
 * @desc 执行查询方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 16:27
 */

/**
 * 为什么要使用这种方式来执行SQL语句
 * 1. 模板化sql语句
 * 2. 资源复用，节约资源
 * 3. 防sql注入 (黑客技术，网站漏洞)
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

// 冒号用于execute时替换字符串 (命令占位符)
$sql = "select * from user where age = :age";

// sql注入
// 22, 具体的值。 还可以这样传 22; select * from admin;
// select * from user where age = 22; select * from admin; 意味着整个数据库是不安全的

// 准备sql, 返回PDOStatement (声明)
$sth = $db->prepare($sql);

// 执行 PDOStatement, 并传入参数
// 执行成功返回true， 失败返回 false
$executeRet = $sth->execute([':age' => 23]);

// 执行结果
var_dump($executeRet);

// 获取所有结果, 获取包含所有结果集的行的数组(索引型结果，键值对型结果)
$result = $sth->fetchAll();

// 打印结果
var_dump($result);

// 执行非查询操作
$sth = $db->prepare("insert into user values (null, :name, :age)");
$executeRet = $sth->execute([':name' => 'zhan', ':age' => 23]);
$result = $sth->rowCount();
var_dump($executeRet);  // -> true
var_dump($result);      // -> []
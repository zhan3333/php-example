<?php
/**
 * @desc exec() 创建表操作
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:41
 */

// 创建连接
try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// 创建一个user表 (id, name, age)
// 执行一段sql语句，并且返回受影响的行数
// 输入一个sql字符串，返回删除或者修改的行数
// exec 不能用做查询select，因为不返回查询的信息
$result = $db->exec(
    'create table user (`id` INT AUTO_INCREMENT, `name` VARCHAR(40) not null, `age` INT(3) not null,  PRIMARY KEY (`id`))'
);  // -> 0 / false

/**
 * 返回值为false的时候，怎么样取获取错误信息呢
 */

/**
 * result:
 * exec 执行失败时会返回false
 * exec 创建表成功时返回受影响的行数0
 *
 * errorInfo()
 * 执行成功返回
 * [
 *  0 => '00000',
 *  1 => NULL,
 *  2 => NULL
 * ]
 * 执行失败返回
 * [
 *  0 => '42000',       // pdo错误码
 *  1 => 1064,          // mysql错误码
 *  2 => 'You have an error in your SQL ...',            // mysql错误消息
 * ]
 */

var_dump($result);

// 使用PDO对象的 errorCode 方法
// 返回PDO对象的错误码
// 错误码长度为5的字符串
// 只知道错误码没啥作用啊,很希望返回mysql自带的错误信息

/**
 * 当执行成功时，返回 "00000"
 * 失败时，返回 错误码
 */
var_dump($db->errorCode());

/**
 * 执行失败时： 返回具体的错误信息, 数组类型
 * [
 *  0 => '42S01',        // 5位长度的字符串，代表PDO的错误码
 *  1 => 1050,        // 4位长度的数字， 代表的是mysql错误码
 *  2 => "Table 'user' already exists",     // mysql 返回的错误信息
 * ]
 *
 * 执行成功时： 返回数组结构
 * [
 *  0 => '00000',
 *  1 => null,
 *  2 => null
 * ]
 */
var_dump($db->errorInfo());

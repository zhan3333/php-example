<?php
/**
 * @desc 错误处理
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 16:10
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

echo "插入操作(错误的语句)..." . PHP_EOL;
$result = $db->exec("insert into USER value (null, 'zhan', 22, null)");

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
if ($db->errorCode() == '00000') {
    echo '操作执行成功' . PHP_EOL;
    echo "受影响的行数为 $result" . PHP_EOL;
} else {
    $errorInfo = $db->errorInfo();
    echo "操作执行失败，错误码: $errorInfo[1], 错误消息： $errorInfo[2]" . PHP_EOL;
    var_dump($errorInfo);
    var_dump($db->errorCode());
}
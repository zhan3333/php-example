<?php
/**
 * @desc 其他操作
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 15:13
 */

// 创建PDO链接
try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

echo "修改一条数据" . PHP_EOL;

/**
 * 字段值已经为该值的行，不属于被修改的行
 */
$result = $db->exec("update user set name='zhan-new'");

// 利用errorCode进行的一个逻辑判断
// 另外还可以通过 $result === false
if ($db->errorCode() == '00000') {
    echo '操作执行成功' . PHP_EOL;
    echo "受影响的行数为 $result" . PHP_EOL;
} else {
    $errorInfo = $db->errorInfo();
    echo "操作执行失败，错误码: $errorInfo[1], 错误消息： $errorInfo[2]" . PHP_EOL;
    exit();
}

/**
 * exec() 不适用于查询，因为返回值只会有受影响的行数
 */
echo PHP_EOL . "查询数据" . PHP_EOL;
$result = $db->exec("select * from user");
var_dump($result);
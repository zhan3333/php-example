<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 14:58
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

/**
 * 通过 exec 插入一条数据
 * 修改的条数，包括插入数据这种类型
 */
$result = $db->exec("insert into user values (null, 'zhan', 22), (null, 'zhan02', 22)");

// 在sql语句中，未标单引号的字符串，会被当作关键字或者字段名或者表名来处理

var_dump($result);              // -> 1

/**
 * 返回上一次sql操作时的错误信息
 * -> [
 *  '00000',
 *  NULL,
 *  NULL
 * ]
 */
var_dump($db->errorInfo());
var_dump($db->errorCode());     // -> '00000'
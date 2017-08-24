<?php
/**
 * @desc 设置连接属性
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/24 17:21
 */

/**
 * 使用 PDO::setAttribute(int $attribute, mixed $value)方法设置数据库配置
 */

/**
 * PDO::ATTR_CASE 强制指定列名的大小写
 *
 * PDO::CASE_LOWER 强制列名小写
 * PDO::CASE_NATURAL 保留数据库驱动返回的列名
 * PDO::CASE_UPPER  强制列名大写
 */

/**
 * PDO::ATTR_ERRMODE 错误报告
 *
 * PDO::ERRMODE_SILENT      仅设置错误代码
 * PDO::ERRMODE_WARNING     引发 E_WARNING 错误
 * PDO::ERRMODE_EXCEPTION   抛出 异常
 */

/**
 * PDO::ATTR_ORACLE_NULLS 转换 NULL 和空字符串
 *
 * PDO::NULL_NATURAL: 不转换
 * PDO::NULL_EMPTY_STRING： 将空字符串转换成 NULL
 * PDO::NULL_TO_STRING: 将 NULL 转换成空字符串
 */

/**
 * PDO::ATTR_STRINGIFY_FETCHES: 提取的时候将数值转换为字符串。
 */

/**
 * PDO::ATTR_TIMEOUT： 指定超时的秒数。
 */

/**
 * PDO::ATTR_AUTOCOMMIT
 */

/**
 * PDO::MYSQL_ATTR_USE_BUFFERED_QUERY （在MySQL中可用）： 使用缓冲查询。
 */

/**
 * PDO::ATTR_DEFAULT_FETCH_MODE： 设置默认的提取模式。
 */

try {
    $db = new PDO('mysql:host=localhost;dbname=test', 'root', 'z283779377g');
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage() . PHP_EOL;
    exit();
}

// 设置查询数据返回的列名为大写
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
$result = $db->query('select * from USER');
var_dump($result->fetchAll());
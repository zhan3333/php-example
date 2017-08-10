<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 14:34
 */

$arr = "{'Organization': 'PHP Documentation Team'}"; // 并不是正确的json字符串

$decode = json_decode($arr);
var_dump($decode);


/**
 * 返回int类型数值，代表错误码
 * JSON_ERROR_NONE 没有错误发生 0
 * JSON_ERROR_DEPTH 到达了最大堆栈深度 1
 * JSON_ERROR_STATE_MISMATCH 无效或异常的 JSON 2
 * JSON_ERROR_CTRL_CHAR 控制字符错误，可能是编码不对 3
 * JSON_ERROR_SYNTAX 语法错误 4
 * JSON_ERROR_UTF8 异常的 UTF-8 字符，也许是因为不正确的编码。 PHP 5.3.3
 * JSON_ERROR_RECURSION One or more recursive references in the value to be encoded PHP 5.5.0
 * JSON_ERROR_INF_OR_NAN One or more NAN or INF values in the value to be encoded  PHP 5.5.0
 * JSON_ERROR_UNSUPPORTED_TYPE 指定的类型，值无法编码。 PHP 5.5.0
 * JSON_ERROR_INVALID_PROPERTY_NAME 指定的属性名无法编码。 PHP 7.0.0
 * JSON_ERROR_UTF16 畸形的 UTF-16 字符，可能因为字符编码不正确。 PHP 7.0.0
 */
var_dump(json_last_error());    // 返回 JSON_ERROR_SYNTAX

if (json_last_error() == 0) {echo '没有错误发生';}
else {echo '解码失败:' . json_last_error_msg();}

/**
 * 返回错误消息
 */
var_dump(json_last_error_msg());        // 返回 Syntax error

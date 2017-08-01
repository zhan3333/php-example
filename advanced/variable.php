<?php
/**
 * @desc 变量
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 15:02
 */

// empty 空值的判定 '', 0, 0.0, '0', null, false, [], 均被看为false
$arr = ['test1', 'test2', 'test3'];
var_dump(empty(""));        // true
var_dump(empty(0));         // true
var_dump(empty(0.0));       // true
var_dump(empty('0'));       // true
var_dump(empty(NULL));      // true
var_dump(empty(FALSE));     // true
var_dump(empty([]));        // true
var_dump(empty($arr[3]));   // true

// isset 判断值是否被设置
// isset() 和 unset() 均接受多个参数
echo PHP_EOL;
var_dump(isset($no_exist));     // false
var_dump(isset($arr));          // true
$a = Null;
var_dump(isset($a));    // false
$a = 'a';
var_dump(isset($a));    // true
unset($a);
var_dump(isset($a));    // false

var_dump(isset($arr[3]));       // false
var_dump(isset($arr[2]));       // true
unset($arr[2]);
var_dump(isset($arr[2]));       // false
unset($arr[0], $arr[1]);
var_dump(isset($arr));          // true

echo PHP_EOL;

// == 与 ===
$a = false;
$b = '0';
$c = '';
$d = Null;
$f = 0;
$e = [];
var_dump($a == $b);     // true
var_dump($a == $c);     // true
var_dump($a == $d);     // true
var_dump($a == $f);     // true
var_dump($a == $e);     // true

// 严格要求类型也相等时用===
var_dump($a === $b);     // false
var_dump($a === $c);     // false
var_dump($a === $d);     // false
var_dump($a === $f);     // false
var_dump($a === $e);     // false




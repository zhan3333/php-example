<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/15 18:14
 */

$a = '123abc';

echo $a;

echo PHP_EOL;

$b = '123\'abc';

echo $b;

echo PHP_EOL;

$c = '123\nabc';

echo $c;

echo PHP_EOL;

$d = "123\nabc";

echo $d . PHP_EOL;

$e = "123\tabc";

echo $e . PHP_EOL;

echo PHP_EOL;

$var = 'var';
$arr = [
    'key' => 'var'
];

$obj = new stdClass();
$obj->key = 'var';

// 简单语法
echo "this is $var" . PHP_EOL;

echo "this is $arr[key]" . PHP_EOL;

echo "this is $obj->key" . PHP_EOL;

// 复杂语法
echo "this is {$var}" . PHP_EOL;

echo "this is {$arr['key']}" . PHP_EOL;

echo "this is {$obj->key}" . PHP_EOL;
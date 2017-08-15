<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/15
 * Time: 20:09
 */

// key合法整形的字符串将会转换成整形
$arr = [
  '8' => 'val'
];

var_dump($arr);

// key 浮点数型将会转换成整形 小数部分将会被舍弃
$arr = [
    8.1 => 'val'
];

var_dump($arr);

// bool 会被转换成整形

$arr = [
    true => 'val1',
    false => 'val2'
];

var_dump($arr);

// null 会被转换成空字符串

$arr = [
    null => 'val'
];

var_dump($arr);

// 数组和对象不能作为key 会得到一个警告

$arr = [
    ['1', '2'] => 'val'
];

// 多个单元都使用了同一个键名，则最后一个有效

$arr = [
    0 => '0',
    1 => '1',
    2 => '2',
    false => 'false',
    1.1 => '1.1',
    '2' => 'str 2'
];

var_dump($arr);

$arr[0] = 'new false';

var_dump($arr);

// 当key未设置时，使用最大的key值+1

//         10      11     12
$arr = [10 => 'zhan', 'xu', 'zhai'];


$arr = [
    99 => '99',
    '100'
];

var_dump($arr);

$arr = [
    'a', // 0
    'b', // 1
    6 => 'c', // 6
    'd', // 7
];

var_dump($arr);

// 取值与设置值

$arr = [
    'key' => 'val'
];

echo $arr['key'] . PHP_EOL;

$arr['key2'] = 'val2';

var_dump($arr);


// 不指定键值的赋值操作

$arr[] = 'val3';    // 7

var_dump($arr);

// 其他数据转换成数组

$obj = new stdClass();
$obj->name = 'tom';     // public
$obj->age = 23;         // public
                        // private  转换成数组之后也没有

$arr = (array) $obj;

var_dump($arr);

$str = 'abc';

var_dump((array) $str);
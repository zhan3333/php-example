<?php
/**
 * @desc 匿名函数示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:54
 */

// 匿名函数是指的不需要函数名称的一种函数

$fun = function () {
    echo 'no name' . PHP_EOL;
};

$fun();

// 函数可以当作参数传入到函数中

function do_fun ($callable) {
    $callable();
}

do_fun(function () {
    echo '当作参数传入的匿名函数执行啦' . PHP_EOL;
});

// 使用外部变量
// 使用 use 关键字
// 使函数内能够使用外部变量
$name = 'zhan';
$other_name = 'tom';
do_fun(function () use ($name) {
    echo "获取到外部变量 name ： $name" . PHP_EOL;
    echo "必须要使用use才能使用外部变量 other_name: $other_name" . PHP_EOL;
});

// 内置函数中，有一些需要传入 callable类型的参数
// 这里使用 array_map() 来作为示例
// 函数作用是，使用传入的匿名函数，对传入的数据的每一个元素执行一次操作

$arr = [
    1, 3, 5, 7, 9
];

$new_arr = array_map(function ($num) {
    return $num * $num;
}, $arr);

var_dump($new_arr);
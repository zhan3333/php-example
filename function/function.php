<?php
/**
 * @desc 函数
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 16:23
 */

// 定义函数
function fun1 () {

}

// 有返回值的函数
function fun2 () {
    return 'hello world';
}

// 带参数的函数
function fun3 ($a) {
    echo __FUNCTION__ . ' ' .$a . PHP_EOL;
}

// 带默认值的参数
function fun4 ($a, $b = 'default') {
    echo __FUNCTION__ . " a = $a, b = $b \n";
}

// 引用参数
function fun5 (&$num) {
    $num ++;
}

// 递归调用

function fun6 ($num) {
    echo "$num\n";
    if ($num > 0) {
        fun6($num - 1);
    }
}

// 调用函数
fun1();
$ret = fun2();
echo "fun2 return is $ret \n";
fun3('test');
fun4('test');
$num = 0;
fun5($num);
echo "num is $num \n";
fun6(10);


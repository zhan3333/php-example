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

// 引用传参
function fun5 (&$num) {
    $num ++;
}

function fun51 ($num) {
    $num  = 100000;
}

// 递归调用

function fun6 ($num) {
    if ($num > 0) {
        echo "$num\n";
        fun6($num - 1);
    } else {
        echo "终止\n";
    }
}

// 通过func_get_args() 获取函数的参数
function fun7 () {
    var_dump(func_get_args());
    var_dump(func_get_arg(3));
}

// 调用函数
do_fun();
$ret = fun2();
echo "fun2 return is $ret \n";
fun3('test');
fun4('test');
$num = 0;
fun5($num);
echo "num is $num \n";

fun51($num);
echo "num is $num \n";

fun6(10);

fun7(1, 2, 3, 'test');

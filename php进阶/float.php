<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/15 18:04
 */

// floor(var) 返回不大于var的最大整数

var_dump((0.1 + 0.7) * 10);

var_dump(floor((0.1 + 0.7) * 10));

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001;

if(abs($a-$b) < $epsilon) {
    echo 'true' . PHP_EOL;
}
<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/15 18:04
 */

// floor(var) 返回不大于var的最大整数

var_dump(0.1 + 0.7);

var_dump((0.1 + 0.7) * 10);

// floor(var) 去掉小数点后的部分，返回整数
// 1.1 => 1   1.99999 => 1

// 0.1 + 0.7 == 0.79999999999 => 7.999999 => 7
var_dump(floor((0.1 + 0.7) * 10));

// 0.1 + 0.7 == 0.8  不要进行这样的判断 false

var_dump(0.1 + 0.7 == 0.8);

$a = 1.23456789;
$b = 1.23456780;
$epsilon = 0.00001; // 误差范围 => 精度

// abs => 获取绝对值
if(abs($a-$b) < $epsilon) {
    echo 'true' . PHP_EOL;
}
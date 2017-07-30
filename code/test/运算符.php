<?php
/**
 * 运算符操作
 * User: 39096
 * Date: 2017/7/30
 * Time: 16:47
 */

// +-*/%
$num1 = 100;
$num2 = 9;
$ret = $num1 + $num2;
$ret = $num1 - $num2;
$ret = $num1 * $num2;
$ret = $num1 / $num2;
$ret = $num1 % $num2;

// += -= /= */ %=
$num1 += $num2; // => $num1 = $num1 + $num2;

// ++ --  哪个在前，就返回哪个值
$num1 = 1;
$num2 = 1;
$num1 = $num2 ++;       // $num1 为1 ， 因为 $num2 在前，所以先返回了$num2 ，然后进行自增操
echo $num1 . PHP_EOL;

$num1 = ++ $num2;       // $num1 为3
// ++ $num2 这个是有返回值的
echo $num1 . PHP_EOL;

$num2 = $num2 + 1;
$num1 = $num2;

// bool运算

$b1 = true;
$b2 = FaLSe;
$c = NuLL;
$c = $b1 && $b2;        // 一假全假
var_dump($c);

$c = $b1 || $b2;        // 一真全真
var_dump($c);


var_dump($b1, $b2);


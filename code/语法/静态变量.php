<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 13:55
 */


// 未使用静态变量时

echo '未使用静态变量' . PHP_EOL;
function countNum1 () {
    $x = 0;
    echo $x . PHP_EOL;
    $x ++;

}

for ($i = 0; $i < 10; $i ++) {
    countNum1();
}

// 使用静态变量

echo '使用静态变量' . PHP_EOL;
function countNum2() {
    static $x = 0;
    echo $x . PHP_EOL;
    $x ++;
}
for ($i = 0; $i < 10; $i ++) {
    countNum2();
}
<?php
/**
 * 逻辑控制
 * User: 39096
 * Date: 2017/7/30
 * Time: 16:56
 */

// if else else if  while do while switch for foreach

// 等于false， null , '', 0, false, '0'

$bool = false;
if ('0') {
    echo 'bool 为真';
} else {
    echo 'bool 为假';
}

if ($bool) {

} elseif ($bool2) {

} else {

}

while ($bool) {
    // 做一些事情
}

do {
    // 做一些事情
    echo '做了一些事情' . PHP_EOL;
} while(false);

// for

for ($i = 0; $i < 10; $i ++) {
    echo $i . PHP_EOL;
}

class User {
    public $name = 'zhan';
    private $age = 23;
}

$user = new User();

foreach ($user as $key => $item) {
    echo $key . ' - ' . $item . PHP_EOL;
}

var_dump(empty('0'));       // true
var_dump(empty(123));       // false

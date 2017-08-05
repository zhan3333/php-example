<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/5
 * Time: 9:08
 */
require __DIR__ . '/User.php';

try {
    $user = new User();
//var_dump($user->age);       // 致命错误
    var_dump($user->name);

    $user->setAge(23);
    var_dump($user->getAge());
//    $user->setAge(-100);
} catch (Exception $exception) {
    echo PHP_EOL . '捕获到的异常；' . $exception->getMessage() . PHP_EOL;
} finally {
    echo PHP_EOL . "finally"  . PHP_EOL;
}

// try
// 扣钱
// 失败
// 发生了一个致命错误
// 充钱

// catch
// 扣的钱充值回去



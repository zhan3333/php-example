<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 21:56
 */

spl_autoload_register(function ($class) {
    echo "$class not fount \n";
    include $class . '.php';
    echo "$class is auto load \n";
});

$light = new Light('台灯'); // $light = new Light(); $light->__construct('台灯');
$user = new User();

unset($light);

echo '脚本结束' . PHP_EOL;

// composer 包管理器 => 基于自动载入
<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:30
 */

// __set() 在设置对象中不存在的成员变量时执行

class User
{
    public function __set($name, $value)
    {
        echo "set no exist property $name, $value" . PHP_EOL;
    }
}

$user = new User();
$user->age = 100;
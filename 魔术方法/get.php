<?php
/**
 * @desc __get() 魔术方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:29
 */

// __get() 在访问不存在的对象成员变量时执行

class User
{
    public function __get($name)
    {
        echo "get no exist property $name" . PHP_EOL;
    }
}

$user = new User();
$user->age;
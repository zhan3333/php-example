<?php
/**
 * @desc 静态方法处理 __callStatic()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:27
 */


// __callStatic()将会在访问不存在的静态方法时，被调用
// 包含方法名，参数

class User
{
    public static function __callStatic($name, $arguments)
    {
        echo "call a not exist static method $name, args is " . implode(', ', $arguments) . PHP_EOL;
    }
}

User::getName('aaa', 'bbb');

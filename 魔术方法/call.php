<?php
/**
 * @desc 方法重载 __call()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:22
 */

// __call() 方法将会在对象被调用不存在的方法时执行
// 参数包括 $name, $arguments

class User
{
    function __call($name, $arguments)
    {
        echo "call a not exist method $name, args is " . implode(', ', $arguments) . PHP_EOL;
    }
}

$user = new User();
$user->getName('aaa', 'bbb');
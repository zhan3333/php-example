<?php
/**
 * @desc __unset() 魔术方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:32
 */

// 作用是，在对对象的不存在的成员变量进行 unset() 操作的时候，会被调用

class User
{
    public function __unset($name)
    {
        echo "property $name not exist" . PHP_EOL;
    }
}

$user = new User();

unset($user->name);

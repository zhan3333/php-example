<?php
/**
 * @desc __isset() 魔术方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:32
 */

// 当使用 empty() 或者 isset() 来查询对象中不存在的变量时，会被调用

class User
{
    public function __isset($name)
    {
        echo "property $name not exist" . PHP_EOL;
        return false;
    }
}

$user = new User();

var_dump(empty($user->name));

var_dump(isset($user->name));
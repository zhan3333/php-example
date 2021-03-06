<?php
/**
 * @desc 魔术方法 __construct()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:16
 */

// 构造函数
// 构造函数通常用于创建对象的时候，对对象的数据进行初始化
// 在执行 new User('tom')时, 构造函数参数就应该传入

class User
{
    public $name = null;

    // 入口，设定一些起始值
    public function __construct($name = '')
    {
        // 初始化
        $this->name = $name;
    }
}

$user = new User('tom');

var_dump($user);
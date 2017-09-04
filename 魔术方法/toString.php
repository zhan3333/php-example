<?php
/**
 * @desc __toString() 魔术方法
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:32
 */


// __toString() 当，将对象当作字符串使用时，__toString() 将会被调用
// 并且返回值当作结果来使用

class User
{
    public $name = '';
    public $age = 0;

    public function __construct($name = '', $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        return "my name is $this->name, age is $this->age";
    }
}

$user = new User('tom', 25);

echo $user;
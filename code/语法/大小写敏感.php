<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 13:44
 */

// php对类、函数、关键词不区分大小写

// 关键词
echo 'echo' . PHP_EOL;
Echo 'Echo' . PHP_EOL;
ECHO 'ECHO' . PHP_EOL;

// 函数
function Fun1 () {
    echo 'fun1' . PHP_EOL;
}

fun1();
Fun1();
FUN1();

// 类
class User {
    function __construct($name = 'default')
    {
        $this->name = $name;
    }

    public $name;

    public function getName () {
        echo $this->name . PHP_EOL;
    }
}

$user1 = new User('User');
$user2 = new user('user');
$user3 = new USER('USER');

$user1->getName();
$user2->getName();
$user3->getName();




<?php
/**
 * 对象
 * User: 39096
 * Date: 2017/7/30
 * Time: 17:06
 */

class User {
    public $name = '';
    /**
     * User constructor.
     * @param string $name
     */
    function __construct($name = '')
    {
        // 用于初始化类成员
        echo '创建了一个对象';
        $this->name = $name;
    }
}

$user = new User('zhan');       // name => zhan
var_dump($user);

$user2 = new User('xu');
var_dump($user2);

unset($user, $user2);

var_dump(empty($user));

var_dump($user);
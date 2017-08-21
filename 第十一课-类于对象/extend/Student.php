<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 22:16
 */
require_once "User.php";

class Student extends User
{
    /**
     * 覆盖操作
     * 方法参数必须与父类一致
     */
    public function run ($name) {
        echo "这次是学生 $name 在跑啦" . PHP_EOL;
        // 调用了父类的方法
        parent::run($name);
    }
}
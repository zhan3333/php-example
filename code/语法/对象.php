<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 15:11
 */
class User {
    public $name = 'test';
    public $age = 23;
    private $a = '私有变量';
    protected $b = '保护变量';
}

$user = new User();
foreach ($user as $item => $value) {
    echo $item . '-' . $value . PHP_EOL;
}
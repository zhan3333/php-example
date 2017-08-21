<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 21:56
 */
class Light
{
    public $name;

    /**
     * 构造函数
     * 通常用于对象的初始化
     * Light constructor.
     */
    public function __construct($name)
    {
        echo "对象被创建" . PHP_EOL;
        echo "传入了 $name" . PHP_EOL;
        $this->name = $name;
    }

    /**
     * 析构函数
     */
    public function __destruct()
    {
        echo self::class . " 对象被销毁啦 \n";
    }
}
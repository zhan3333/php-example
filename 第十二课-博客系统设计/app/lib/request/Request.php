<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/22
 * Time: 21:41
 */
class Request
{
    // 静态储存
    private static $instance;

    // 传入的post数据
    private $post;

    // 传入的get数据
    private $get;

    // 包含所有的传入参数
    private $input;

    /**
     * 获取单示例
     */
    public static function single_instance()
    {
        if (empty(self::$instance))
            self::$instance = new self();       // new static();
        return self::$instance;
    }

    /**
     * 构造函数
     */
    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
        $this->input = array_merge($_POST, $_GET);
    }

    /**
     * 获取指定键值的传入参数
     * @param $key
     * @param null $default
     * @return null
     */
    public function input($key = '', $default = null)
    {
        if (empty($key)) return $this->input;
        if (empty($this->input[$key])) return $default;
        return $this->input[$key];
    }
}
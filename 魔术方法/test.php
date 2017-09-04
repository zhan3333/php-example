<?php
/**
 * 实际操作示例, 应用场景
 * User: 39096
 * Date: 2017/9/4
 * Time: 22:33
 */

// 需要实现，任意多个配置的输入和获取, 并且可以获取到默认值

class Config
{
    private $config = [];

    /**
     * 配置信息初始化
     * Config constructor.
     * @param array $arr
     */
    public function __construct($arr = [])
    {
        $this->config = $arr;
    }

    public function __get($name)
    {
        if (!empty($this->config[$name])) {
            return $this->config[$name];
        } else {
            return null;
        }
    }

    public function __set($name, $value)
    {
        $this->config[$name] = $value;
    }
}

$config = new Config(['app' => 'blog']);

var_dump($config->name);
var_dump($config->app);

$config->debug = true;

var_dump($config->debug);


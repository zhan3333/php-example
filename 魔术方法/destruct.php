<?php
/**
 * @desc 结构函数 __destruct()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:20
 */

// 对象在被销毁的时候，会调用这个方法
// 销毁包括 unset(), 脚本执行结束
// 通常使用在关闭数据库链接，关闭文件操作句柄

class User
{
    public $name = null;

    public function __construct($name = '')
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "对象被销毁啦" . PHP_EOL;
    }
}

$user = new User('tom');


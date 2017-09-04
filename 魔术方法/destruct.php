<?php
/**
 * @desc 析构函数 __destruct()
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:20
 */

// 对象在被销毁的时候，会调用这个方法
// 销毁包括 unset(), 脚本执行结束, 变量被设置成其他值
// 通常使用在关闭数据库链接，关闭文件操作句柄
// 为什么要及时关闭数据库连接
//   1. 数据库连接的进程少
//   2. 程序占用时间长(数据库的占用时间结束后，应当断开连接)

class User
{
    public $name = null;

    public function __construct($name = '')
    {
        $this->name = $name;
        $GLOBALS['has_user_obj'] = true;
    }

    // 类被销毁的时候，需要做什么事情，就在这里面执行
    public function __destruct()
    {
        echo "对象被销毁啦" . PHP_EOL;
        $GLOBALS['has_user_obj'] = false;
    }
}


$user = new User('tom');

var_dump($GLOBALS['has_user_obj']);

//unset($user);
$user = null;

var_dump($GLOBALS['has_user_obj']);


echo "脚本才结束";
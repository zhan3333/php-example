<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 16:05
 */

// 变量

// 下划线或者字母开头
$_a = 'zhan';       // 字符串
$a = 'test';

$name = 'zhan'; // 定义

$num = 1;       // 定义数字

$bool = true;
$bool = false;
$num = $bool;

$arr = ['zhai', 'xu', 'zhan'];
$num = $arr;

// 数组 => js里面的对象和数组的融合
$arr = [
    'name' => 'zhan',       // key: name
    'zhai',                 // key: 0
    'child' => [            // key: child
        'name' => 'xu',
        'age' => 25
    ]
];
print_r($arr);

// 数组遍历操作

foreach ($arr as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            echo $k . '--' . $v . PHP_EOL;
        }
    } else {
        echo $key . '-' . $value . PHP_EOL;
    }
}

// 对象 (变量和方法的集合)
// 定义类
class User2 {
    // 变量
    public $name = 'zhan';
    private $age = 23;
    
    // 静态变量
    public static $xin = '123';

    /**
     * 返回年龄
     * @return int
     */
    public function getAge () {
        return $this->age;
    }

    // 静态方法
    public static function getNum () {
        return 10000;
    }
}

// 实例化 => 对象
$user = new User2();
echo $user->name . PHP_EOL;
echo $user->getAge() . PHP_EOL;

echo User2::$xin . PHP_EOL;
echo User2::getNum() . PHP_EOL;

// 普通成员和普通方法是需要实例化
// 静态变量和静态方法是不需要实例化的

// 用途
// 静态变量和静态方法常用语提供一些处理事件的功能

class myMath {
    public static function sum($num1, $num2)
    {
        return $num1 + $num2;
    }

    public static function jian($num1, $num2)
    {
        return $num1 - $num2;
    }
}

echo myMath::sum(100, 200) . PHP_EOL;
echo myMath::jian(100, 200) . PHP_EOL;



// 普通变量和普通方法使用

class User3 {
    private $number = 0;     // 钱
    public $name = 'zhan';
    private $tizhong = '胖';

    public function pang()
    {
        $this->tizhong = '胖';
    }

    public function shou()
    {
        $this->tizhong = '瘦';
    }

    /**
     * 增加钱
     * @param $num
     */
    public function addNum($num)
    {
        $this->number += $num;
    }

    public function jianNum($num)
    {
        $this->number -= $num;
    }

    public function getNum()
    {
        return $this->number;
    }
}

$zhan = new User3();    // 人这个对象
echo $zhan->getNum().PHP_EOL;   // 获取钱
$zhan->addNum(10000000);    // 增加钱
echo $zhan->getNum().PHP_EOL;   // 获取钱
$zhan->jianNum(8888888);    // 增加钱
echo $zhan->getNum().PHP_EOL;   // 获取钱



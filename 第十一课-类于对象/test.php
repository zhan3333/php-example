<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 20:43
 */

// 类是对现实生活中的物体的一个抽象的表达

// 台灯的例子 => 类

// 灯泡种类、灯泡的亮度、灯泡的可调节性、能源的来源 => 属性

// 开台灯、关台灯 => 方法

// 灯、灯座 => 常量(固定的值)

// ----------------

// 对象是指现实生活中的具体的一个物体(具体化的类)

// Panasonic （具体的一个台灯）

// 灯泡的种类(可调节的条状的灯泡) ...  (属性对应的值)

// 方法可进行调用(开关灯的效果)

// 常量 （灯泡、灯座）

class Light {
    // 类常量(在类中固定不变的值)
    const MY_NAME = '台灯';

    // 类变量
    public $name;

    /**
     * 静态变量
     * @var
     */
    public static $age;

    /**
     * 静态方法
     */
    public static function sFun1 ()
    {
        self::$age;
        // 不能使用伪变量
    }

    public static function sFun2()
    {
        self::sFun1();
    }

    // 台灯是否是开启的
    public $isOpen = false;

    // 类方法 组成：访问控制符、是否为静态、函数
    public function fun1 () {
        // 伪变量 $this 代表这个类本身
        return $this->name;
    }

    public function fun2 () {
        echo self::MY_NAME;
        return $this->fun1();
    }

    /**
     * 开灯
     */
    public function open () {
        echo '台灯被打开啦' . PHP_EOL;
        $this->isOpen = true;
    }

    /**
     * 关灯
     */
    public function off()
    {
        $this->isOpen = false;
    }
}

Light::class;
Light::MY_NAME;
Light::sFun1();
Light::$age;

//$light = new Light;
//
//echo '中文名为' . Light::MY_NAME . PHP_EOL;
//
//
//echo '中文名为' . $light::MY_NAME . PHP_EOL;
//
//$light->name = '可调节的Panasonic';
//
//echo "台灯的名称是 {$light->name}" . PHP_EOL;
//
//$status = $light->isOpen === false ? '关': '开';
//
//echo "台灯现在是 $status 着的" . PHP_EOL;
//
//echo "开启台灯" . PHP_EOL;
//
//$light->open();
//
//$status = $light->isOpen === false ? '关': '开';
//
//echo "台灯现在是 $status 着的" . PHP_EOL;



//// 返回类的名称字符串
//echo Light::class;


//$name = 'zhan';
//
//// todo use 使用不正常
//function fun2 () use ($name) {
//    return $name;
//}

<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/15
 * Time: 20:30
 */

// 基础对象创建
$obj = new stdClass();
// 可以对对象中不存在的变量名进行赋值
$obj->name = 'tom';

var_dump($obj);


// 类与对象
class User {
    // 变量
    public $name = 'tom';
    // 静态变量, 不需要创建对象，可以直接调用
    public static $age = 23;
    // 受保护的变量，不能被外部访问
    // 类内部可以调用
    // 子类可以调用 (继承)
    protected $sex = '男';
    // 只有内部可以调用
    private $office = '程序猿';

    // 方法
    public function getName () {
        echo self::$age;
        echo $this->sex;
        $this->getOfiice();
        self::getAge();
        return $this->name;
    }

    private function getOfiice () {
        $this->getName();
    }

    // 静态方法
    // $this 只能够在对象环境下使用
    // 使用限制更少 (类可以用，对象也可以用)
    public static function getAge () {
        return self::$age;
    }
}

$user = new User();

var_dump($user);    // 访问变量


// 其他类型转换为对象 scalar 访问

$str = 'zhan';

var_dump((object) $str);

$arr = [
    'name' => 'tom',
    'age' => 23,
    'book' => [
        '数学', '语文'
    ]
];

var_dump((object) $arr);    // 遍历赋值操作
<?php
/**
 * @desc 一个继承示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:08
 */

class User
{
    // 都会被继承
    public $name = 'User';
    protected $age = 22;
    private $sex = '男';

    // 受保护的方法的一个特点
    // 除了自己，或者子类调用，外部是不允许调用的
    protected function getName () {
        return $this->name;
    }

    private function getAge()
    {
        return $this->name;
    }

    public function getSex()
    {
        return $this->sex;
    }

    public function sum($a, $b)
    {
        return $a + $b;
    }

    /**
     * 返回时间戳
     * final 禁止重载
     * @return int
     */
    final public function getTime() {
        return time();
    }
}

class Student extends User
{
    // 重载
    public function getSex()
    {
        echo "getSex 中调用父类受保护的 getName " . $this->getName() . PHP_EOL;
        // 检测是否被继承下来了
//        echo "getSex 中调用父类私有的 getAge " . $this->getAge() . PHP_EOL;
        return '女';
    }

    // 重载参数数量必须一直
    // todo 会产生什么样的后果
    public function sum($a, $b, $c)
    {
        return $a + $b + $c ;
    }

    // 不允许重载
//    public function getTime () {
//
//    }


    // 能够被继承下来的东西，都被隐藏了起来
}

$student = new Student();

var_dump($student);

echo "name: {$student->name}" . PHP_EOL;
//echo "name: {$student->getName()}" . PHP_EOL;   // 受保护方法继承
//echo "age: {$student->getAge()}" . PHP_EOL;     // 私有方法继承
echo "sex: {$student->getSex()}" . PHP_EOL;     // 公有方法继承
echo "sum: {$student->sum(100, 200, 300)}" . PHP_EOL;
echo "{$student->getTime()}" . PHP_EOL;
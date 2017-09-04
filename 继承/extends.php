<?php
/**
 * @desc 一个继承示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 18:08
 */

class User
{
    public $name = 'User';
    protected $age = 22;
    private $sex = '男';

    public function getName () {
        return $this->name;
    }

    public function getAge()
    {
        return $this->name;
    }

    public function getSex()
    {
        return $this->age;
    }

    public function sum($a, $b)
    {
        return $a + $b;
    }
}

class Student extends User
{
    // 重载
    public function getSex()
    {
        return 100;
    }

    // 重载参数数量必须一直，否则会产生致命错误
    public function sum($a, $b, $c)
    {
        return $a + $b + $c ;
    }
}

$student = new Student();
echo "name: {$student->name}" . PHP_EOL;
echo "name: {$student->getName()}" . PHP_EOL;
echo "sex: {$student->getSex()}" . PHP_EOL;
echo "sum: {$student->sum(100, 200)}" . PHP_EOL;
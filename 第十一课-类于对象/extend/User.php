<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 22:14
 */
class User
{
    public $name;
    public $age;

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 跑的操作
     */
    public function run($name)
    {
        echo self::class . ": $name 在跑" . PHP_EOL;
    }
}
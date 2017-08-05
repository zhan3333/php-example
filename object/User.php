<?php

/**
 * 用户信息类
 * User: 39096
 * Date: 2017/8/5
 * Time: 9:08
 */
class User
{
    private $age;       // 直接无法访问和修改,强行修改或访问，会发生致命错误
    public $name;       // 可以直接访问和修改

    /**
     * @return mixed
     */
    public function getAge()
    {
        return "年龄为： $this->age";
    }

    /**
     * @param mixed $age
     * @return bool
     */
    public function setAge($age)
    {
        // 变量数值的判断
        if ($age < 0 || $age > 200) {
            throw new Exception('年龄应该在(0, 200)之间');
        } else {
            $this->age = $age;
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/21
 * Time: 22:16
 */

require_once 'User.php';
require_once 'Student.php';

$user = new User();

$user->run('zhan');

$student = new Student();

// 子类可以调用父类继承下来的方法

$student->run('zhan');


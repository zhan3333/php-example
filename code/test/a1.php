<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 17:18
 */

require 'a2.php';
include 'a2.php';

// require 在导入不存在的文件时，会抛出一个致命错误 网站会出500错误
// include 在导入不存在的文件时，只会有一个警告

echo 'a1' .PHP_EOL;
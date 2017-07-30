<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/7/30
 * Time: 12:14
 */

echo '导入存在的文件index1.php' . PHP_EOL;
require './index1.php'; // 导入存在的文件
echo '导入完成' . PHP_EOL;

echo '导入不存在的文件 indexn.php' .PHP_EOL;
require './indexn.php'; // 导入不存在的文件
echo '导入完成' . PHP_EOL;
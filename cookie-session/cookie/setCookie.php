<?php
/**
 * @desc 测试cookie
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/11 14:45
 */

// 设置cookie到浏览器中

/**
 * name: 设置cookie键
 * value : 设置cookie值
 * expire: 设置cookie到期时间（时间戳）(默认永久有效)
 * path: 有效目录  默认为/  不在同一目录下的脚本，无法访问cookie
 * domain: 设置有效域名  baidu.com
 * secure: 设置是否仅通过https方式设置传输cookie
 * httpOnly: 设置是否仅通过http方式访问cookie（限制前端:js访问cookie）
 */
$ret = setcookie('name', 'zhan', 0, '/');

//time(); // 当前时间戳
//
//var_dump($ret);
//
//// 取cookie
//$name = $_COOKIE['name'];
//
//var_dump($_COOKIE);
//
//// 删除cookie
//$ret = setcookie('name', '', time() - 3600);
//var_dump($ret);
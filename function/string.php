<?php
/**
 * @desc 字符串常用函数
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 17:23
 */


$str = 'hello world!';

// 获取字符串长度
$len = strlen($str);
echo "字符串长度为： $len \n";

// implode() 将数组转换为字符串
$arr = [
    'hello',
    'world',
    '!'
];
$str = implode(' ', $arr);
echo "implode合成的字符串为：$str \n";

// explode() 将字符串拆分为数组
$str = 'hello world !';
$arr = explode(' ', $str);
echo '拆分后结果为: ';
var_dump($arr);

// trim() rtrim() ltrim() 清除字符串左右的空格
$str = '  hello  ';
var_dump(trim($str));
var_dump(rtrim($str));
var_dump(ltrim($str));

// stripos()  strpos() 查找字符串位置
$str = 'hello world !';
$ret = stripos($str, 'llo');        // 不区分大小写版本
echo "str中找到llo位置为: $ret \n";
$ret = stripos($str, 'no exist');   // 查找不存在的字符串
echo "str中找到no exist位置为: $ret \n";
var_dump($ret);     // false

// strrev() 反转字符串
$str = 'hello world !';
$rev_str = strrev($str);
echo "反转后的字符串为: $rev_str \n";

// substr()  裁剪字符串
$str = 'hello world !';
$sub_str = substr($str, 0, 5);
echo "裁剪后的字符串为： $sub_str \n";

// 字符串大小写转换 strtoupper() strtolower()
$str = 'hello world !';
$upper_str = strtoupper($str);
$lower_str = strtolower($upper_str);
echo "转换为大写后： $upper_str, 转换为小写后： $lower_str \n";

<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/15 18:14
 */

$a = '123abc';

echo $a;

echo PHP_EOL;

$b = '123\'abc';

echo $b;

echo PHP_EOL;

$b1 = "123'abc";
$b2 = '123"abc';

echo $b1 . PHP_EOL;
echo $b2 . PHP_EOL;

// 转义字符
$c = '123\nabc' . PHP_EOL;    // 换行符在单引号中间不生效

echo $c;


$name = 'zhan' . PHP_EOL;
$c1 = '123 $name abc' . PHP_EOL;    // 变量是不换被替换成值的

echo $c1;

echo PHP_EOL;

// 双引号  \n \t

echo '双引号' . PHP_EOL;

$d = "123\nabc";        // 换行符 => 文件中，命令行中

echo $d . PHP_EOL;


// \t 进行一个8的倍数的缩进 字符串不会重叠也不会相邻
$e = "12345678\tabc";        // 缩进符 => 进行一个缩进 8个空格

echo $e . PHP_EOL;

echo PHP_EOL;

$var = 'var';
$arr = [
    'key' => 'var'
];

$obj = new stdClass();
$obj->key = 'var';

// 简单语法
echo "this is $var" . PHP_EOL;

echo "this is $arr[key]" . PHP_EOL; // 不加单引号

echo "this is $obj->key" . PHP_EOL;

// 复杂语法 => 花括号括起来

echo "this is {$var}" . PHP_EOL;

echo "this is {$arr['key']}" . PHP_EOL;

echo "this is {$obj->key}" . PHP_EOL;

function fun1 () {
    return 'fun1';
}
$fun1 = 'fun1val';

// {$ 必须紧密相连的
// ↓ {${fun1()}} => {$fun1} => fun1val
echo "this is {${do_fun()}}" . PHP_EOL; // 调用方法

$val = ${do_fun()};       // todo 跳过，暂时不理解

var_dump($var);

// 额外的提一下，$ 符号的解析问题

$a = 'test';

$test = 'var';

// $$a => $test => 'var'
echo "this is {$$a}" . PHP_EOL;

// 修改字符串中字符

$str = 'my name is zhan';

$str[0] = 'o';

echo $str . PHP_EOL;

// 错误写法
//foreach ($str as $key => $val) {
//    echo $var . PHP_EOL;
//}

// 遍历字符串的所有字符
for ($i = 0; $i < strlen($str); $i ++) {
    echo $str[$i] . PHP_EOL;
}

// 类型转换
// 其他数据类型，转换成字符串

$arr = [
    'name' => 'zhan'
];

// 强制转换
// (type) $val
// (int) $val
// (array) $val
// 数组不能直接转字符串
var_dump((string) $arr);

// 对象
$obj = new stdClass();
$obj->key = 'val';

class User {
    public $name = 'tom';

    /**
     * 允许将对象当作字符串使用
     */
    function __toString()
    {
        return "my name is $this->name";
    }
}

/**
 * @var User $user
 */
$user = new User();

echo "user say : $user" . PHP_EOL;

// 0 '0' '' false null []
var_dump((string) false);   // ''
var_dump((string) true);    // '1'

var_dump((string) 10);      // '10'
var_dump((string) 10.1);    // '10.1'

var_dump((string) null);    // ''

// 字符串相加

// 数字和字符串相加
// 字符串从左到右，会一个个字符的读取，读到一个完整的数字字符串为止
// 不能读取为数字的字符串，会当作0来处理

var_dump(10 + (float)'10.1');
var_dump(10 + '10.1');
var_dump(10 + '10.1 abc');
var_dump(10 + 'a 10.1 abc');



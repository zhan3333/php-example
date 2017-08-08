<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/8
 * Time: 20:40
 */

$users = [
    0 => [
        'name' => 'zhan',
        'age' => 23
    ],
    1 => [
        'name' => 'zhai',
        'age' => 25
    ],
    2 => [
        'name' => 'xu',
        'age' => 23
    ]
];

// '第一个用户为zhan, 年龄为23。第二个用户为...'
$word = [
    '零', '一', '二', '三', '四'
];

// 100001  => 一万零一

foreach ($users as $key => $user) {
    $key_new = $key + 1;
    echo '第' . $word[$key_new] . '用户为'. implode(', 年龄为', $user) . '。' . PHP_EOL;
}

$arr = [
    'name' => 'zhan',
    'age' => 23
];

foreach ($arr as $key => $item) {
    echo $key . ' - ' . $item . PHP_EOL;
}

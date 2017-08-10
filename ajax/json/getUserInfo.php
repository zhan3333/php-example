<?php
/**
 * @desc 获取用户信息
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 14:55
 */

$userInfo = [
    'name' => 'zhan',
    'age' => 23,
    'sex' => '男',
    'hasBook' => [
        '数学', '语文', '英语'
    ]
];

$jsonStr = json_encode($userInfo, JSON_UNESCAPED_UNICODE);

echo $jsonStr;
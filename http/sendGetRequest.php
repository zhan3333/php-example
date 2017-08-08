<?php
/**
 * @desc 发送get请求
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/8 18:15
 */

$wd = '这里填百度的关键词';

$queryData = [
    'wd' => $wd,
    'name' => 'zhan'
];

$queryStr = http_build_query($queryData);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'http://www.baidu.com/s?' . $queryStr);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($curl, CURLOPT_HEADER, 0);

$result = curl_exec($curl);

echo $result;
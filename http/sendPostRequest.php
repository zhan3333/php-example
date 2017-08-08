<?php
/**
 * @desc 发送一个post请求
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/8 17:11
 */

$username = 'zhan';
$password = '123456';

$postData = ['username' => $username, 'password' => $password];

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, 'http://example.com');

curl_setopt($curl, CURLOPT_HEADER, 0);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);

// 设置为post请求
curl_setopt($curl, CURLOPT_POST, true);

// 设置post请求数据
curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);

$result = curl_exec($curl);

curl_close($curl);
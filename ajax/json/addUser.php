<?php
/**
 * @desc 测试post数据
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 15:29
 */

if ($_POST) {
    $data = $_POST;
    $msg = '已接收到post数据';
} else {
    $data = [];
    $msg = '未接收到post数据';
}

echo json_encode(['msg' => $msg, 'data' => $data], JSON_UNESCAPED_UNICODE);


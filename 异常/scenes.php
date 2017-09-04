<?php
/**
 * @desc 使用场景
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:40
 */

// 异常的一个常用特性为：
// 可以直接中断流程，进入到异常流程中

// 以注册流程为例子

try {
    $user_name = empty($_POST['user_name'])?null:$_POST['user_name'];
    $password = empty($_POST['password'])?null:$_POST['password'];
    if (empty($user_name)) throw new Exception('用户名必须填写');
    if (empty($password)) throw new Exception('密码必须填写');

    // 写入数据库
    $reg_ret= false;
    if ($reg_ret == false) throw new Exception('数据库写入失败');

} catch (Exception $exception) {
    echo "注册失败: {$exception->getMessage()}" . PHP_EOL;
}


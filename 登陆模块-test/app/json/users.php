<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/12
 * Time: 10:32
 */

require __DIR__ . '/lib/init.php';

// action 判定执行什么操作

/**
 * action 可能的值
 * user_login
 * user_loginout
 * user_register
 * get_user_info
 */
$act = empty($_POST['action'])?'action_default':$_POST['action'];

// 判断是否为可调用的函数
if (is_callable($act)) {
    // 调用$act 这个函数
    $ret = call_user_func($act);
    echo $ret;
} else {
    // 查找不到对应的方法
    echo json([], '未知的接口请求', -1);
}

/**
 * 默认操作
 */
function action_default () {
    return json([], '这是一个默认返回,您还没有输入action参数');
}

/**
 * 用户登陆接口
 * input: post
 * username
 * password
 *
 * output: json
 * isLogin
 */
function user_login () {
    // 数据验证
    if (empty($_POST['username'])) {
        return json([], 'username必须填写', -1);
    }
    if (empty($_POST['password'])) {
        return json([], 'password必须填写', -1);
    }
    // 数据获取
    $username = trim($_POST['username']);   // 用户名
    $password = trim($_POST['password']);   // 明文密码

    // 获取hash密码
    $br = App::br();
    $user_info = $br->get([['username', '=', $username]]);
    if (empty($user_info)) return json([], '用户不存在', -1);
    $user_info = $user_info[0];
    $hash_password = $user_info->password;

    // 验证密码是否正确
    if (password_verify($password, $hash_password)) {
        return json([], '登陆成功');
    } else {
        return json([], '登陆失败', -1);
    }
}

/**
 * 登出操作
 * output: json
 * isSuccess bool
 */
function user_loginout () {

}

/**
 * 用户注册
 * input: post
 * username
 * password
 *
 * output: json
 * isRegister
 */
function user_register () {
    // 数据验证
    if (empty($_POST['username'])) {
        return json([], 'username必须填写', -1);
    }
    if (empty($_POST['password'])) {
        return json([], 'password必须填写', -1);
    }
    // 数据获取
    $username = trim($_POST['username']);   // 用户名
    $password = trim($_POST['password']);   // 明文密码
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $br = App::br();
    $ret = $br->insert([
        'username' => $username,
        'password' => $hash_password,
        'create_time' => date('Y-m-d H:i:s')
    ]);
    if ($ret) {
        return json([], '注册成功');
    } else {
        return json([], '注册失败', -1);
    }
}


/**
 * 获取用户信息
 * output: json
 * userInfo
 */
function get_user_info () {

}


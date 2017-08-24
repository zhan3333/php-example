<?php
/**
 * 入口文件
 * User: 39096
 * Date: 2017/8/22
 * Time: 20:52
 */

// 导入文件
define('ROOT_PATH', realpath(__DIR__ . '/../'));
include ROOT_PATH . '/service/User.php';
include ROOT_PATH . '/lib/App.php';

// 获取到 post中的action，客户端的目标接口 示例 User_login
$action = empty($_POST['action'])?'':trim($_POST['action']);
if (empty($action)) App::response()->json([], '必须传入接口名', -1);

// 拆分action，拆成 User login
$action_arr = explode('_', $action);    // 示例 ['User', 'login']
if (count($action_arr) != 2) App::response()->json([], '非法的接口名称', -1);

// 判断接口是否存在
if (is_callable([$action_arr[0], $action_arr[1]])) {
    // 存在
    // 那么就进行调用
    $ret = call_user_func_array([$action_arr[0], $action_arr[1]], []);
    App::response()->json($ret);
} else {
    // 返回错误信息
    App::response()->json([], '接口不存在', -1);
}

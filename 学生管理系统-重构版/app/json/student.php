<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 16:02
 */
require __DIR__ . '/lib/init.php';

$act = empty($_POST['action'])?'default':$_POST['action'];

$functionName =  "action_$act";

if (is_callable($functionName)) {
    $ret = call_user_func($functionName);
    echo $ret;
} else {
    echo json([], '不存在的方法', -1);
}

// 默认方法
function action_default () {

}

/**
 * 获取学生信息列表
 */
function action_get_student_list () {
    $br = App::br();
    $studentList = $br->get();
    return json(['studentList' => $studentList]);
}

/**
 * 添加学生信息
 * @return string
 */
function action_add_student () {
    $br = App::br();
    $name = trim($_POST['name']);
    $sex = trim($_POST['sex']);
    $birthday = trim($_POST['birthday']);
    $id_card = trim($_POST['id_card']);
    $student_id = trim($_POST['student_id']);
    $admission_time = trim($_POST['admission_time']);
    $profession = trim($_POST['profession']);

    if (id_card_is_use($id_card)) return json([], '身份证号已被注册', -1);
    if (student_id_is_use($student_id)) return json([], '学号已被注册', -1);

    $ret = $br->insert([
        'name' => $name,
        'sex' => $sex,
        'birthday' => $birthday,
        'id_card' => $id_card,
        'student_id' => $student_id,
        'admission_time' => $admission_time,
        'profession' => $profession
    ]);
    if ($ret) {
        return json([], '添加成功');
    } else {
        return json([], '添加失败', -1);
    }
}

function id_card_is_use ($id_card) {
    $br = App::br();
    $ret = $br->get([['id_card', '=', $id_card]]);
    return !empty($ret);
}

function student_id_is_use ($student_id) {
    $br = App::br();
    $ret = $br->get([['student_id', '=', $student_id]]);
    return !empty($ret);
}


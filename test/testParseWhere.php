<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/8
 * Time: 22:22
 */

/**
 * 解析sql语句中的 where 后面部分
 * select * from users where `name` = 'zhan' and `age` < '28';
 * where 字段名 判断符 值 and 字段名 判断符 值 and 字段名 判断符 值
 * @param array $wheres
 * [
 *  [
 *      'name', '=', 'zhan'
 *  ],
 *  [
 *      'age', '<', '28'
 *  ],
 *  [
 *      'sex', '<>', '女'
 *  ]
 * ]
 *
 * @return string where `name` = 'zhan' and `age` < '28' and `sex` <> '女'
 */
function parseWhere($wheres) {
    $ret = '';
    $ret .= 'where ';
    foreach ($wheres as $where) {
        // $where[0] => 'name'
        // $where[1] => '='
        // $where[2] => 'zhan'
        $where[0] = "`$where[0]`";  // 字段名补上反引号
        $where[2] = "'$where[2]'";  // 字段值补上单引号

        // 目标 `name` = 'zhan'
        $temp = $where[0] . " $where[1] " . $where[2];
        $ret .= $temp;
        $ret .= ' and ';
    }
    // 假设只有一个查询条件 `name` = 'zhan' 的时候
    // 这个时候 $ret = 'where `name` = 'zhan' and ';
    // 那么，我们需要将最后一个and去除掉

    $ret = mb_substr($ret, 0, mb_strlen($ret) - 4);
    return $ret;
}

$wheres = [
    ['name', '=', 'zhan'],
    ['age', '<', 25],
    ['sex', '<>', '女'],
    ['birthday', '>', '1993-1-1'],
    ['birthday', '<', '1995-1-1'],
];

$ret = parseWhere($wheres);

echo $ret;
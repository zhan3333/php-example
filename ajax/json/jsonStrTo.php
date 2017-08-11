<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/10 17:52
 */

$str = '{"name": "zhan", "age": 23, "sex": "男"}';

$arr = json_decode($str, true);

var_dump($arr);

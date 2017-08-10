<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/10
 * Time: 21:38
 */

$server = $_SERVER;

$jsonStr = json_encode($server, JSON_UNESCAPED_UNICODE);

echo $jsonStr;
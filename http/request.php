<?php
/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/8
 * Time: 21:04
 */

// $_GET, $_POST, $_COOKIE, $_FILES
//var_dump($_REQUEST);


// header
echo json_encode([
    'server' => $_SERVER,
    'get' => $_GET
]);

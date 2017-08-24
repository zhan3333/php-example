<?php

/**
 * 类文件的提供者
 * User: 39096
 * Date: 2017/8/22
 * Time: 21:26
 */

include_once __DIR__ . '/response/Response.php';
include_once __DIR__ . '/request/Request.php';

class App
{

    /**
     * 返回对象
     * @return Response
     */
    public static function response()
    {
        return Response::single_instance();
    }

    /**
     * 返回请求对象
     */
    public static function request()
    {
        return Request::single_instance();
    }
}
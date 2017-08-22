<?php

/**
 * 用户类
 * User: 39096
 * Date: 2017/8/22
 * Time: 20:56
 */
class User
{
    public function login()
    {
        return App::request()->input();
    }
}
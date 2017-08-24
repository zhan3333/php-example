<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/22
 * Time: 21:21
 */
class Response
{
    // 静态储存
    private static $instance;

    /**
     * 获取单示例
     */
    public static function single_instance()
    {
        if (empty(self::$instance))
            self::$instance = new self();       // new static();
        return self::$instance;
    }

    /**
     * 返回json类型数据
     * @param array $data   数据
     * @param string $msg   消息
     * @param int $code     错误码
     * @param bool $exit    是否终止脚本并输出内容
     * @return string       json编码字符串
     */
    public function json($data = [], $msg = 'success', $code = 0, $exit = true)
    {
        $json = json_encode([
            'data' => $data,
            'msg' => $msg,
            'code' => $code
        ], JSON_UNESCAPED_UNICODE);

        if ($exit) {
            exit($json);
        } else {
            return $json;
        }
    }
}
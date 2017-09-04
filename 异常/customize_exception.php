<?php
/**
 * @desc 自定义异常示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:17
 */

// 自定义的异常必须继承基础异常类或者异常子类
// 使用到了一些知识： 继承、魔术方法

// 定义一个自己的异常
class MyException extends Exception
{
    /**
     * 构造函数
     * MyException constructor.
     * @param string $msg
     * @param int $code
     * @param Throwable $throwable
     */
    public function __construct($msg, $code, $throwable = null)
    {
        parent::__construct($msg, $code, $throwable);
    }

    /**
     * 魔术方法，作用是在将对象当作字符串使用时，将返回这里的字符串
     * 这个魔术方法必须返回字符串类型
     * @return string
     */
    public function __toString()
    {
        // todo 获取子类的类名
        return get_class() . " 文件： $this->file, 行数： $this->line, 错误代码为： $this->code, 错误消息为: $this->message";
    }

    // 包括了 getFile() ....
}

class SecondException extends MyException
{

}

// 手动抛出了一个异常
throw new SecondException('手动抛出的一个异常', 10086);
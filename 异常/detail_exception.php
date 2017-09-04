<?php
/**
 * @desc 异常的详解
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:19
 */

//Exception  {
//
///* 属性 */
//
//protected string $message ;   // 异常消息内容
//
//protected int $code ;         // 异常代码
//
//protected string $file ;      // 抛出异常的文件名
//
//protected int $line ;         // 抛出异常在该文件中的行号
//
///* 方法 */
//
// 异常构造函数
//public __construct ([ string $message = "" [, int $code = 0 [, Throwable $previous = NULL ]]] )
//
// 获取异常消息内容
//final public string getMessage ( void )
//
// 返回异常链中的前一个异常
//final public Throwable getPrevious ( void )
//
// 获取异常代码
//final public int getCode ( void )
//
// 创建异常时的程序文件名称
//final public string getFile ( void )
//
// 获取创建的异常所在文件中的行号
//final public int getLine ( void )
//
// 获取异常追踪信息
//final public array getTrace ( void )
//
// 获取字符串类型的异常追踪信息
//final public string getTraceAsString ( void )
//
// 将异常对象转换为字符串
//public string __toString ( void )
//
// 异常克隆
//final private void __clone ( void )
//}
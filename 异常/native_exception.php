<?php
/**
 * @desc 原生异常抛出
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:10
 */

// 错误可以使用捕获异常的方式捕获
throw new Exception('自定义的一个异常', 100);

echo "异常未被处理的话，程序将会中断";
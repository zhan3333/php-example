<?php
/**
 * @desc 基本异常抛出
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:10
 */

// 1. 异常未处理的话，程序将会中断
// 2. 可以手动进行异常的抛出

// 抛出了一个异常
throw new Exception('自定义的一个异常', 100, null);

// 做了一个输出
// 目的是看程序是否执行到了这一行
echo "异常未被处理的话，程序将会中断";
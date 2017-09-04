<?php
/**
 * @desc 异常捕获示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/9/4 17:30
 */

// 异常捕获操作包含以下几个关键字
// 1. try       执行可能出现异常的代码
// 2. catch     捕获到指定异常后执行
//      如果try没有抛出异常，那么catch不会执行
//      可以有多个catch存在(自定义的异常)
// 3. finally   无论有没有捕获到都执行


// 示例： 捕获一个 Error

try {
    // 尝试做一些事情
    throw new Exception('手动抛出的一个异常', 10086);
} catch (Exception $exception) {
    // 捕获上边可能发生的异常
    // 将对象当作字符串使用时，将会调用 __toString() 魔术方法，返回一个字符串
    echo "使用__toString()显示信息" . $exception . PHP_EOL;

    echo "使用Exception对象的方法来获取具体数据" . PHP_EOL;
    echo "file: {$exception->getFile()}" . PHP_EOL;
    echo "line: {$exception->getLine()}" . PHP_EOL;
    echo "code: {$exception->getCode()}" . PHP_EOL;
    echo "message: {$exception->getMessage()}" . PHP_EOL;
} finally {
    // 无论如何都会执行的东西
    // 在捕获失败后，也会执行
    echo '捕获一个Exception结束' . PHP_EOL;
}

echo PHP_EOL;
// 自定义一个异常类
// 观察自定义异常的捕获流程
class MyException extends Exception
{

}

// 1. 所有异常都可以通过 Exception 类型来捕获
// 2. 一次catch执行完毕后剩余的catch将不会执行
// 3. 若没有catch处理异常，则会继续往外抛

try {
    throw new MyException();
} catch (MyException $exception) {
    // 捕获默认异常
    echo "捕获到了自定义异常" . PHP_EOL;
} catch (Exception $exception) {
    // 捕获自定义异常
    echo "捕获到了默认异常" . PHP_EOL;
} finally {
    echo "捕获完成" . PHP_EOL;
}

// 一个没有捕获到异常的示例
echo PHP_EOL;
try {
    throw new Exception();
} catch (MyException $exception) {
    // 捕获默认异常
    echo "捕获到了自定义异常" . PHP_EOL;
} finally {
    // 通常做一些处理后事的操作
    // 异常打印
    echo "捕获完成" . PHP_EOL;
}


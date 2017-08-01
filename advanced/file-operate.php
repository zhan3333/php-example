<?php
/**
 * @desc 文件操作
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/1 15:35
 */

// readfile 读取文件
echo '读取到的文件内容为: ';
$num = readfile('./test.txt');      // 这里会直接输出文件内容
echo PHP_EOL;
echo '字节数: ' . $num .PHP_EOL;
echo PHP_EOL;

// fopen fread 读取文件
$handle = fopen('./test.txt', 'r');
$content = fread($handle, filesize('./test.txt'));
fclose($handle);
echo '使用fopen + fread读取内容: ' . $content . PHP_EOL;
echo PHP_EOL;

// file_get_contents 读取文件
$content = file_get_contents('./test.txt');
echo '使用 file_get_contents 读取文件内容: ' . $content . PHP_EOL;
echo PHP_EOL;

// file_put_contents 写入文件

echo  PHP_EOL;
$text = "\n写入的内容123";      // \n用于文件内换行
file_put_contents('./test.txt', $text, FILE_APPEND);
$content = file_get_contents('./test.txt');
echo '写入后文件内容为: ' . $content . PHP_EOL;
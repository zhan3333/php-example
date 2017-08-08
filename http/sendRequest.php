<?php
/**
 * @desc 发送http请求示例
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/8 16:50
 */

// 初始化curl句柄
$curl = curl_init();

// 设置请求url
curl_setopt($curl, CURLOPT_URL, 'http://example.com');

// 设置header响应头是否输出 response headers
curl_setopt($curl, CURLOPT_HEADER, 1);

// 是否返回结果
// 0 时，自动输出返回值到屏幕中，返回值为 bool 表示是否执行成功
// 1 时，不输出内容，返回请求到的字符串
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// 运行curl， 请求网页
$result = curl_exec($curl);

// 显示获得的数据
var_dump($result);

/**
 * 返回数据
 * HTTP/1.1 200 OK                              // 协议及状态值
 * Cache-Control: max-age=604800                // 网页缓存规则
 * Content-type: text/html                      // body类型及编码
 * Date: Tue, 08 Aug 2017 09:02:05 GMT          // 消息发送时间
 * Etag: "359670651+gzip+ident"                 // entity tag 用于表示URL独享是否改变
 * Expires: Tue, 15 Aug 2017 09:02:05 GMT       // 设置缓存失效时间
 * Last-Modified: Fri, 09 Aug 2013 23:54:35 GMT // 文档的最后修改时间
 * Server: ECS (cpm/F9D5)                       // 服务器名字
 * Vary: Accept-Encoding
 * X-Cache: HIT
 * Content-Length: 1270                         // body 长度
 *
 * <!doctype html>
 * <html>
 * ...
 */
<?php
/**
 * post 请求示例
 * User: 39096
 * Date: 2017/8/8
 * Time: 21:17
 */

new ABC();

if ($_POST) {
    echo json_encode($_POST);
} else {
    echo "<html>
<body>
<form method='post' action='postRequest.php'>
    用户名: <input type='text' name='username'>
    密码： <input type='password' name='password'>
    <input type='submit' value='确认'>
</form>
</body>
</html>";
}
<?php
/**
 * 所有文件的起始文件
 * User: 39096
 * Date: 2017/8/4
 * Time: 23:15
 */

require_once __DIR__ . '/BaseResponse.php';
define('ROOT_PATH', realpath('./../') . '/');       // 项目根目录

header('Access-Control-Allow-Origin: http://php-example.com:1026');
header('content-type: text/json');

class App {
    /**
     * @var null|BaseResponse
     */
    private static $br = null;

    /**
     * @var null|array
     */
    private static $br_config = null;

    /**
     * @return BaseResponse|null
     * @throws Exception
     */
    public static function br()
    {
        if (self::$br) return self::$br;
        $br_config = self::$br_config;
        if (empty($br_config)) throw new Exception('config未设置');
        self::$br = new BaseResponse($br_config['username'], $br_config['password'], $br_config['dbname'], $br_config['host']);
        return self::$br;
    }

    /**
     * @param null $br_config
     */
    public static function setBrConfig($br_config)
    {
        self::$br_config = $br_config;
    }
}

$db_config = [
    'username' => 'root',
    'password' => 'z283779377g',
    'host' => 'localhost',
    'dbname' => 'test'
];

// 设置数据库配置
App::setBrConfig($db_config);
$br = App::br();
$br->setTableName('users');
$br->setDebug(true);
$br->setDebugModel($br::DEBUG_MODEL_FILE);

/**
 * 返回
 * @param array $data
 * @param string $msg
 * @param int $code
 * @return string
 */
function json ($data = [], $msg = 'success', $code = 0) {
    return json_encode([
        'data' => $data,
        'msg' => $msg,
        'code' => $code
    ], JSON_UNESCAPED_UNICODE);
}
<?php

/**
 * Created by PhpStorm.
 * User: 39096
 * Date: 2017/8/7
 * Time: 22:09
 */
class BaseResponse
{
    // 根据id查找数据
    // 根据条件查找数据
    // 插入数据
    // 更新数据
    // 删除数据

    /**
     * 数据库pdo对象
     * @var PDO
     */
    private $db;

    /**
     * 表名
     * @var string
     */
    private $table_name;

    /**
     * 设置debug模式
     * @var bool
     */
    private $debug = true;

    /**
     * 用于debug模式下控制debug内容输出
     * @var string
     */
    private $debugModel = self::DEBUG_MODEL_FILE;

    // debug 模式
    const DEBUG_MODEL_HTML = '1';
    const DEBUG_MODEL_FILE = '2';

    /**
     * 初始化类时执行
     * BaseResponse constructor.
     * @param $username
     * @param $password
     * @param $dbname
     * @param string $host
     * @throws Exception
     */
    public function __construct($username, $password, $dbname, $host = 'localhost')
    {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            if (empty($this->db)) throw new Exception('数据库连接失败');
        } catch (PDOException $exception) {
            echo '数据库连接失败' . PHP_EOL;
            echo $exception->errorInfo . PHP_EOL;
            exit;
        }
    }

    /**
     * 根据id查找单条数据
     * @param integer $id
     * @return object
     */
    public function find($id)
    {
        $sql = "select * from $this->table_name where id = $id";
        $ret = $this->query($sql);
        $row = $ret->fetchObject();
        return $row;
    }

    /**
     * 条件查询数据
     * @param array $where
     * [
     *  [
     *      'id', '=', 1
     *  ],
     *  [
     *      'name', '=', 'zhan'
     *  ]
     * ]
     * @return array
     */
    public function get($where = [])
    {
        $sql = "select * from $this->table_name" . $this->parseWhere($where);
        $ret = $this->query($sql);
        $objArr = [];
        while ($row = $ret->fetchObject()) {
            $objArr[] = $row;
        }
        return $objArr;
    }

    /**
     * 更新数据
     * @param array $data
     * @param array $where
     * @return bool
     */
    public function update($data, $where = [])
    {
        $sql = "update $this->table_name set " . $this->parseUpdate($data) . $this->parseWhere($where);
        $ret = $this->query($sql);
        return (bool) $ret;
    }

    /**
     * 插入一条数据
     * @param array $data
     * @return bool
     */
    public function insert($data)
    {
        $sql = "insert into $this->table_name " . $this->parseInsert($data) ;
        $ret = $this->query($sql);
        return (bool) $ret;
    }

    /**
     * 删除一条数据
     * @param array $where
     * @return bool
     */
    public function delete($where = [])
    {
        $sql = "delete from ". $this->table_name . $this->parseWhere($where);
        $ret = $this->query($sql);
        return (bool) $ret;
    }

    /**
     * 返回debug模式
     * @return bool
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * 设置debug模式
     * @param bool $debug
     * @throws Exception
     */
    public function setDebug($debug)
    {
        if (is_bool($debug)) {
            $this->debug = $debug;
        } else {
            throw new Exception('debug必须设置为bool类型');
        }
    }

    /**
     * 执行查询操作
     * @param string $sql
     * @return PDOStatement
     * @throws Exception
     */
    private function query($sql)
    {
        if (empty($this->table_name)) throw new Exception('未设置表名');
        $ret = $this->db->query($sql);
        if ($this->debug) $this->afterQuery($sql, $ret);
        if ($ret === false) throw new Exception('数据库查询失败');
        return $ret;
    }

    /**
     * 执行查询之后运行
     * @param string $sql   执行查询的sql语句
     * @param $ret
     */
    private function afterQuery($sql, $ret)
    {
        if ($this->debugModel == self::DEBUG_MODEL_FILE) {
            // 日志写入文件中
            $data = date('Y-m-d H:i:s') . PHP_EOL . $sql . PHP_EOL . json_encode($ret) . PHP_EOL;
            file_put_contents('debug.log', $data, FILE_APPEND);
        } elseif ($this->debugModel == self::DEBUG_MODEL_HTML) {
            // 输出到浏览器控制台中
            echo "<script>console.log('query:', \"$sql\")</script>";
        }
    }

    /**
     * 解析sql语句中的insert table_name 后面部分
     * insert into users (name, age, sex) values ('zhan', 24, '男')
     * @param array $data
     * [
     *  'name' => 'zhan',
     *  'age' => 23
     * ]
     * @return string "(`name`, `age`) values ('zhan', '23')"
     */
    private function parseInsert($data)
    {
        $keys = array_keys($data);
        $values = array_values($data);
        foreach ($keys as &$key) {
            $key = "`$key`";
        }
        foreach ($values as &$value) {
            $value = "'$value'";
        }
        $keys_str = implode(',', $keys);
        $values_str = implode(',', $values);
        return "($keys_str) values ($values_str)";
    }

    /**
     * 解析sql语句中的 where 后面部分
     * select * from users where name = 'zhan' and age < 28;
     * where 字段名 判断符 值 and 字段名 判断符 值 and 字段名 判断符 值
     * @param $where
     * [
     *  [
     *      'id', '=', 1
     *  ],
     *  [
     *      'name', '=', 'zhan'
     *  ]
     * ]
     * @return string
     */
    private function parseWhere($where)
    {
        if ($where) {
            $ret = ' where ';
            foreach ($where as $item) {
                $item[0] = "`$item[0]`";
                $item[2] = "'$item[2]'";
                $ret .= implode(' ', $item);
                $ret .= ' and ';
            }
            $ret = substr($ret, 0, strlen($ret) - 5);
        } else {
            $ret = '';
        }
        return $ret;
    }

    /**
     * 解析sql语句中的 update table_name set 后面部分
     * update users set name = 'zhan', age = 25, sex = '男'
     * @param array $data
     * [
     *  'name' => 'new-name',
     *  'age' => 23
     * ]
     * @return string
     */
    private function parseUpdate($data)
    {
        $ret = '';
        foreach ($data as $key => $value) {
            $ret .= " `$key` = '$value',";
        }
        if (strlen($ret) > 1) {
            $ret = substr($ret, 0, strlen($ret)-1);
        }
        return $ret;
    }

    /**
     * 获取表名
     * @return mixed
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * 设置表名
     * @param mixed $table_name
     */
    public function setTableName($table_name)
    {
        $this->table_name = $table_name;
    }

    /**
     * 获取debug模式
     * @return string
     */
    public function getDebugModel()
    {
        return $this->debugModel;
    }

    /**
     * 设置debug模式
     * @param string $debugModel
     */
    public function setDebugModel($debugModel)
    {
        $this->debugModel = $debugModel;
    }
}
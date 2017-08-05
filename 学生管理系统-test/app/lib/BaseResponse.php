<?php

/**
 * 数据库操作类
 * User: 39096
 * Date: 2017/8/3
 * Time: 22:20
 * @property  debug
 */
class BaseResponse
{
    // 根据id查找数据
    // 根据条件查找数据
    // 插入数据
    // 更新数据
    // 删除数据

    private $db;
    private $table_name;
    private $debug = true;

    /**
     * 初始化类时执行
     * BaseResponse constructor.
     * @param $username
     * @param $password
     * @param $dbname
     * @param string $host
     */
    public function __construct($username, $password, $dbname, $host = 'localhost')
    {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
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
     * @return bool
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
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
     * 执行查询
     * @param string $sql
     * @return PDOStatement
     */
    private function query($sql)
    {
        $ret = $this->db->query($sql);
        if ($this->debug) {
            echo "<script>console.log('query:', \"$sql\")</script>";
        }
        return $ret;
    }

    /**
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
     * @return mixed
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * @param mixed $table_name
     */
    public function setTableName($table_name)
    {
        $this->table_name = $table_name;
    }
}
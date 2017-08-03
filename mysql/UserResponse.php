<?php

/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/8/3 16:39
 */
class UserResponse
{
    /**
     * @var PDO
     */
    private $db;
    private $debug = true;

    public function __construct($username, $password, $dbname, $host = 'localhost')
    {
        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        }catch (PDOException $PDOException) {
            echo '数据库连接失败' . PHP_EOL;
            echo $PDOException->errorInfo;
            exit();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getUserById($id)
    {
        $sql = "select * from users where `id` = $id";
        $ret = $this->query($sql);
        return $this->first($ret);
    }

    /**
     * 根据姓名查找用户
     * @param $name
     * @return array
     */
    public function getUserByName($name)
    {
        $sql = "select * from users where `name` = '$name'";
        $ret = $this->query($sql);
        return $this->get($ret);
    }

    /**
     * 插入一条数据
     * @param array $data
     * @return bool
     */
    public function insert(array $data)
    {
        foreach ($data as $key => $value) {
            $filter_data["`$key`"] = "'$value'";
        }
        $keys = implode(',', array_keys($filter_data));
        $values = implode(',', array_values($filter_data));
        $sql = "insert into users ($keys) values ($values)";
        $ret = $this->query($sql);
        return (bool)$ret;
    }

    /**
     * 根据条件更新数据
     * @param $data
     * @param array $where
     * @return bool
     */
    public function update($data, $where = [])
    {
        $sql = 'update users set ' . $this->parseUpdateData($data) . $this->parseWhere($where);
        $ret = $this->query($sql);
        return (bool)$ret;
    }

    /**
     * 根据条件删除数据
     * @param array $where
     * @return bool
     */
    public function delete($where = [])
    {
        $sql = 'delete from users ' . $this->parseWhere($where);
        $ret = $this->query($sql);
        return (bool)$ret;
    }

    /**
     * 解析更新数据数组为查询字符串
     * @param $data
     * @return bool|string
     */
    private function parseUpdateData($data)
    {
        $ret = '';
        foreach ($data as $key => $value) {
            $ret .= "`$key` = '$value',";
        }
        $ret = substr($ret, 0, strlen($ret) - 1);
        return $ret;
    }

    /**
     * 处理where值为查询字符串
     * @param $where
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
            }
        } else {
            $ret = '';
        }
        return $ret;
    }

    /**
     * 获取单个对象
     * @param PDOStatement $PDOStatement
     * @return mixed
     */
    private function first(PDOStatement $PDOStatement)
    {
        return $PDOStatement->fetchObject();
    }

    /**
     * 获取所有对象
     * @param PDOStatement $PDOStatement
     * @return array
     */
    private function get(PDOStatement $PDOStatement)
    {
        $objs = [];
        while ($obj = $PDOStatement->fetchObject()) {
            $objs[] = $obj;
        }
        return $objs;
    }

    /**
     * 执行查询操作
     * @param $sql
     * @return PDOStatement
     */
    private function query($sql) {
        if ($this->debug) {
            var_dump($sql);
        }
        return $this->db->query($sql);
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
        $this->debug = $debug;
    }
}
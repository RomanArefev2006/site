<?php
class Db {
    private $conn;
    private $stmt;

    public function __construct(array $db_config) {
        try {
            $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
            $this->conn = new PDO($dsn, $db_config['user'], $db_config['password'], $db_config['options']);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    public function query($query, $params = [])
    {
        $this->stmt = $this->conn->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }
    public  function findAll()
    {
        return $this->stmt->fetchAll();
    }
    public  function find()
    {
        return $this->stmt->fetch();
    }
    public  function findOrFail()
    {
        $res = $this->find();
        if(!$res) {
            echo "Error 404";
            die();
        }
        return $res;
    }
}
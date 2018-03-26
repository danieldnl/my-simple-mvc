<?php

namespace Core\Database;

use PDO;

/*
|--------------------------------------------------------------------------
| QueryBuilder Class
|--------------------------------------------------------------------------
|
| PDO Database Class
| Connect to Database
| Create prepare statements
| Bind values
| Return rows and results
|
*/
class QueryBuilder
{
    private $connection;
    private $host;
    private $user;
    private $pass;
    private $dbname;

    private $dbh;
    private $stmt;

    public function __construct()
    {
        $this->connection = $database['DB_CONNECTION'];
        $this->host = $database['DB_HOST'];
        $this->user = $database['DB_USER'];
        $this->pass = $database['DB_PASS'];
        $this->dbname = $database['DB_NAME'];

        //Set DSN
        $dsn = "{$this->connection}:host={$this->host};dbname={$this->dbname}";
        $options = [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        //Create PDO Instance
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //Prepare statement with query
    public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }

    //Bind values
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    //Execute prepare statement
    public function execute()
    {
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    //Get resultset as array of objects
    public function resultSet()
    {
        $this->execute();

        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    //Get single record as object
    public function single()
    {
        $this->execute();

        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    //Get row count
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
}

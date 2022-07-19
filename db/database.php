<?php
class Database
{
    public static $connect;

    public function __construct()
    {
        try {
            $string = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            self::$connect = new PDO($string, DB_USER, DB_PASS);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$connect) {
            //return self::$connect;
        }
        return $instance = new self();
    }

    public static function newInstance()
    {
        return $instance = new self();
    }

    public function read($query, $data = array())
    {
        $stm = self::$connect->prepare($query);
        $result = $stm->execute($data);
        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }
        }
        return false;
    }

    public function write($query, $data = array())
    {
        $stm = self::$connect->prepare($query);
        $result = $stm->execute($data);
        if ($result) {
            return true;
        }
        return false;
    }
}

<?php

/**
 * 
 * @author RônaldSena
 * 
 */
class Conexao extends PDO {

    private $dsn = 'mysql:host=localhost;dbname=teste;charset=utf8';
    private $user = 'root';
    private $password = '';
    private $options = array(
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    public $conn = null;

    function __construct() {

        try {
            if ($this->conn == null) {
                $conn = parent::__construct($this->dsn, $this->user, $this->password, $this->options);
                $this->conn = $conn;
                return $this->conn;
            }
        } catch (PDOException $erro) {
            echo $erro->getMessage();
            return false;
        }
    }

    function __destruct() {
        $this->conn = NULL;
    }

}

<?php 
class Database {
    private $host = "localhost";
    private $user = "anett";
    private $pass = "7112";
    private $dbname = "php_elso_dolgozat";
    protected $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host,$this->user, $this->pass, $this->dbname);
    }
}
?>
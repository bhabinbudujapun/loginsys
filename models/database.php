<?php

class database
{
    public $servername = "localhost";
    public $username = "root";
    public $dbname = "logsysdb";
    public $password = "";
    public $conn;

    public function __construct()
    {
        try {

            //dsn - Data Source Name
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $this->conn =  new PDO($dsn, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }
}

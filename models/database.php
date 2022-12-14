<?php

class database
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "";

    public function __construct()
    {
        try {
            //TEST 
            // $str = $_GET['query'];
            // echo $str . "basedb" . "<br>";

            //dsn - Data Source Name
            $dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
            $pdo =  new PDO($dsn, $this->username, $this->password);

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }
}
new database();

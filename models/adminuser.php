<?php
include 'models/base_model.php';

class User extends Base_model
{
    public $table = 'admin';

    public function __construct()
    {
        $this->table_name = $this->table;
        $a = new database();
        $this->conn = $a->conn;
    }

    public function checkValidation($user_credentials)
    {
        //Extracting data from $user_credentials arrary
        $email = $user_credentials[0];
        $password = md5($user_credentials[1]);

        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE email = :email AND password = :password");

        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user)
            return true;
        else
            return false;
    }
}

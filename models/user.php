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

    public function validate()
    {
        $user = '';
        if (count($_POST)) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE
            email = :email AND password = :password");

            $stmt->execute([
                ':email' => $email,
                ':password' => $password
            ]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        if ($user)
            return $user;
        else
            return $user;
    }
}

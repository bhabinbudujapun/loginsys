<?php
include 'models/base_model.php';

<<<<<<< HEAD
class User extends Base_model
=======
class adminUser extends Base_model
>>>>>>> 4d56aaf ('User_Side')
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
<<<<<<< HEAD

=======
>>>>>>> 4d56aaf ('User_Side')
        $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE email = :email AND password = :password");

        $stmt->execute([
            ':email' => $email,
            ':password' => $password
        ]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

<<<<<<< HEAD
        if($user)
=======
        if ($user)
>>>>>>> 4d56aaf ('User_Side')
            return true;
        else
            return false;
    }
}

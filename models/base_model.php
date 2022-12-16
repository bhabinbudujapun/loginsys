<?php
include 'models/database.php';

class Base_model
{
    public $table_name;
    public $conn;

    public function checkValidation($user_credentials)
    {
        // Define the email and password to be authenticated
        $email = $user_credentials[0];
        $password = md5($user_credentials[1]);

        // return $password;
        $stmt = $this->conn->prepare("SELECT * FROM admins WHERE email = :email AND password = :password");
        $stmt->execute([
            'email' => $email,
            'password' => $password,
        ]);

        $user = $stmt->fetch();
        // var_dump($user);

        // return $user;
        // if ($user === false) {
        //     // No matching rows were found.
        //     return 'wrong';
        // } else {
        //     // A matching row was found.
        //     return 'success';
        // }

        // $stmt = $this->conn->prepare('SELECT password FROM admins WHERE email = :email');
        // $stmt->execute(['email' => $email]);
        // $user = $stmt->fetch();
        // // $hash_password = MD5($password);
        // return $user;
        // // if ($hash_password == $user[3])
        // //     return true;
        // // else
        // //     return false;
    }
}

<?php
include 'models/database.php';

class Base_model
{
    public $table_name;
    public $conn;

    public function checkValidation($user_credentials)
    {
        // $stmt = $this->conn->prepare("SELECT * FROM $this->table WHERE email = ? AND password = ?");

        // $stmt->bindValue(1, $user_credentials[0]);
        // $stmt->bindValue(2, $user_credentials[1]);
        // $stmt->execute();

        // return $user_credentials;
        // return $stmt->rowCount();

        // Connect to the database
        // $pdo = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');

        // Define the email and password to be authenticated
        $email = $user_credentials[0];
        $password = $user_credentials[1];

        // Retrieve the user's record from the database
        $stmt = $this->conn->prepare('SELECT * FROM $this->table WHERE email = ?');
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        // Check if the provided password matches the hashed password stored in the database
        if (password_verify($password, $user['password'])) {
            // The password matches, so return 1 to indicate success
            return 1;
        } else {
            // The password does not match, so return 0 to indicate failure
            return 0;
        }
    }
}

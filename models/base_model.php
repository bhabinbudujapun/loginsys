<?php
include 'models/database.php';

class Base_model
{
    public $table = 'users';
    public $conn;

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

    public function allUser()
    {
        $stmt = $this->conn->prepare('SELECT * FROM users');
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }

    public function editUser($name, $email, $id)
    {
        $stmt = $this->conn->prepare('UPDATE users SET 
        name = :name, 
        email = :email 
        WHERE id = :id');

        $stmt->execute(array(
            ':name' => $name,
            ':email' => $email,
            ':id' => $id
        ));
    }

    public function deleteUser($id)
    {
        $stmt = $this->conn->prepare('DELETE FROM users WHERE id = :id');
        $stmt->execute(array(':id' => $id));
    }
}

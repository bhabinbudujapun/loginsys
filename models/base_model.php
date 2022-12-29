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

    public function addUser($email, $username, $address)
    {
        $date = date("Y-m-d H:i:s");
        $stmt = $this->conn->prepare("INSERT INTO users (id, email, username, created_at, updated_at, address) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bindValue(1, null);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $username);
        $stmt->bindValue(4, $date);
        $stmt->bindValue(5, $date);
        $stmt->bindValue(6, $address);
        return $stmt->execute();
    }

    public function allUser()
    {
        // Prepare the SELECT statement
        $sql = 'SELECT id, email, username, created_at, updated_at, address FROM users';
        $stmt = $this->conn->prepare($sql);

        // Execute the SELECT statement
        $stmt->execute();

        // Fetch the result set as an associative array
        $result = $stmt->fetchAll();
        return $result;
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

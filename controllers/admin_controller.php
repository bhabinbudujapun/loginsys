<?php
session_start();
include 'models/adminusers.php';

class admin
{
    public function index1()
    {
        include 'views/login.php';
    }

    public function dashboard()
    {
        if (count($_POST) > 0) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // echo 'hello world555';
            $user_credentials = array($email, $password);
            $admin_obj = new User();
            $result = $admin_obj->checkValidation($user_credentials);
            // echo $result[0] . "<br>";
            // echo $result[1] . "<br>";

            if ($result) {
                $_SESSION['email'] = $user_credentials[0];
                include 'view/dashboard.php';
            }
        } else {
            echo 'Failed to login';
            header('Location:' . ABSPATH);
            exit();
        }
    }
}

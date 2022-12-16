<?php
session_start();
include 'models/adminusers.php';
// include 'views/dashboard.php';

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

            $user_credentials = array($email, $password);
            $admin_obj = new User();
            $result = $admin_obj->checkValidation($user_credentials);
            return $result;
            // echo gettype($result) . "<br>";
            // var_dump($result) . "<br>";
            // if($result == false)
            // echo
            // echo $result[1] . "<br>";

            // if ($result === false) {
            //     // No matching rows were found.
            //     return 'wrong';
            // } else {
            //     // A matching row was found.
            //     return 'sccessfull';
            // }

            //     if ($result) {
            //         $_SESSION['email'] = $user_credentials[0];
            //         // include 'view/dashboard.php';
            //         header('Location: http://localhost/loginsys/views/dashboard');
            //     }
            // } else {
            //     echo 'Failed to login';
            //     header('Location:' . ABSPATH);
            //     exit();
            // }
        }
    }
}

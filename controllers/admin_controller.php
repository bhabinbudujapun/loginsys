<?php
session_start();
include 'models/user.php';

class Admin_controller
{
    public function index()
    {
        include 'views/login.php';
    }

    //Test Function
    public function parameter($para = 1)
    {
        echo 'Function: parameter(' . $para . ')';
    }

    public function dashboard()
    {
        if (count($_POST) > 0) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user_credentials = array($email, $password);

            $admin_obj = new User();
            $result = $admin_obj->checkValidation($user_credentials);

            //Return TRUE if email and password is match
            if ($result) {
                $_SESSION['username'] = $result['username'];
                include 'views/dashboard.php';
                exit;
            } else {
                // var_dump($result);
                // die;
                include 'views/login.php';
                exit;
            }
        } else {
            // echo 'main else';
            // die;
            include 'views/login.php';
            exit;
        }
    }
}

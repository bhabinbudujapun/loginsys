<?php
session_start();
include 'models/adminuser.php';

class Admin_controller
{
    public function index()
    {
        include 'views/login.php';
    }

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

            $admin_obj = new AdminUser();
            $result = $admin_obj->checkValidation($user_credentials);

            //Return TRUE if email and password is match
            if ($result) {
                $_SESSION['email'] = $user_credentials[0];
                include 'views/dashboard.php';
                exit;
            } else {
                // var_dump($result);
                // die;
                header('location: views/login`');
                exit;
            }
        } else {
            // echo 'main';
            // die;
            include 'views/login.php';
            exit;
        }
    }
}

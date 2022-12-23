<?php
session_start();
include 'models/user.php';

class User_controller
{
    public function index()
    {
        include 'views/login.php';
    }

    public function logout()
    {
        session_destroy();
        include 'views/login.php';
    }

    public function login()
    {
        $userObj = new User();
        $result = $userObj->validate();

        if ($result) {
            $_SESSION['username'] = $result['username'];
            include 'views/dashboard.php';
            exit;
        } else {
            include 'views/login.php';
            exit;
        }
    }
}

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
        include 'views/logout.php';
    }

    public function login()
    {
        $userObj = new User();
        $result = $userObj->validate();

        if ($result) {
            $userdata = $this->viewall();
            $_SESSION['userdata'] = $userdata;
            $_SESSION['username'] = $result['username'];
            include 'views/dashboard.php';
            exit;
        } else {
            include 'views/login.php';
            exit;
        }
    }

    public function viewall()
    {
        $userObj = new User();
        $users = $userObj->allUser();
        return $users;
    }

    public function edit()
    {
        echo "edit";
        die;
    }
}

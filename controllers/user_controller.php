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
            $userdata = $userObj->allUser();
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
        if (isset($_SESSION['username'])) {
            $userObj = new User();
            $userdata = $userObj->allUser();
            $_SESSION['userdata'] = $userdata;
            include 'views/dashboard.php';
        } else {
            include 'views/login.php';
            exit;
        }
    }

    public function add()
    {
        echo 'add function';

        // Retrieve the value of the 'email' field from the form
        $email = $_POST['email'];
        echo $email;
        die;
    }

    public function edit()
    {
        echo "edit function" . '<br>';
        // Retrieve the value of the 'email' field from the form
        $email = $_POST['email'];
        echo $email;
        die;
        $userObj = new User();
        $userObj->allUser();
    }
}

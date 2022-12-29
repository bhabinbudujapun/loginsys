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
        if (isset($_SESSION['username'])) {
            if (isset($_POST['email'])) {
                // Retrieve the value of the 'email' field from the form
                $email = $_POST['email'];
                $username = $_POST['username'];
                $address = $_POST['address'];

                $userObj = new User();
                $result = $userObj->addUser($email, $username, $address);
                if ($result) {
                    include 'views/dashboard.php';
                    exit;
                }
            } else {
                include 'views/dashboard.php';
                die;
            }
        } else {
            include 'views/login.php';
            exit;
        }
    }

    public function edit()
    {
        echo "edit function" . '<br>';
        // Retrieve the value of the 'email' field from the form
        echo $id = $_POST['id'] . '<br>';
        echo $email = $_POST['email'] . '<br>';
        echo $email = $_POST['username'] . '<br>';
        echo $email = $_POST['address'] . '<br>';
        die;
        $userObj = new User();
        $userObj->allUser();
    }
}

<?php
class User_controller
{
    public function index()
    {
        die('hey i am login controoler');
        include 'views/login.php';
    }

    public function logout()
    {
        include 'views/logout.php';
    }
}

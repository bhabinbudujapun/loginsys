<?php
session_start();
include 'models/adminuser.php';

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
            $admin_obj = new adminUser();
            $result = $admin_obj->checkValidation($user_credentials);

            //Return TRUE if email and password is match
            if ($result) {
                $_SESSION['email'] = $user_credentials[0];
                header('Location: /loginsys/views/dashboard.php');
                exit;
<<<<<<< HEAD
                }
            } else {
                header('Location: /loginsys/views/login.php');
                exit;
            }
=======
            } else {
                header('Location: /loginsys/');
                exit;
            }
        } else {
            header('Location: /loginsys/');
            exit;
        }
>>>>>>> 4d56aaf ('User_Side')
    }
}

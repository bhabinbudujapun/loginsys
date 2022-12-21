<?php
class Main_Controller
{
    // public static $count = 0;
    public function __construct()
    {
        if (isset($_GET['query'])) {
            $query = $_GET['query'];

            //Seperating the string according to '/'
            $result = explode("/", $query);

            // FORMAT FOR PATH <<- include 'controllers/admin_controller.php'; ->> 
            include 'controllers/' . $result[0] . '_controller.php';

            $class = $result[0];
            $method = $result[1];
            $obj = new $class;
            $obj->$method();
        } else {
            include 'views/login.php';
            // include 'views/dashboard.php';
        }
    }
}
new Main_Controller();

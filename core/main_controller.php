<?php

class Main_Controller
{
    // public static $count = 0;

    public function __construct()
    {
        //TEST
        // $str = $_GET['query'];
        // echo $str."basec" . "<br>";

        $str = $_GET['query'];

        //Seperating the string according to '/'
        $result = explode("/", $str);

        include ABSPATH . '/controllers/' . $result[0] . '_controller.php';

        $class = $result[0];
        $method = $result[1];

        $obj = new $class;
        $obj->$method();
    }
}
new Main_Controller();

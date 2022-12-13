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
        echo $str . "basec" . "<br>";

        //Seperating the string according to '/'
        $result = explode("/", $str);

        include ABSPATH . '/controllers/' . $result[0] . '.php';
        $obj = new $result[0];
        $obj->$result[1];
    }
}
new Main_Controller();

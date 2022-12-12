<?php

class Base_Controller
{
    public function __construct()
    {
        $str = $_GET['query'];

        //Seperating the string according to '/'
        $result = explode("/", $str);

        include ABSPATH . '/controllers/' . $result[0] . '.php';
        $obj = new $result[0];
    }

    public function load_view($view)
    {
    }
}
new Base_Controller();
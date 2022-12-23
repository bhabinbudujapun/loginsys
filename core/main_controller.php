<?php
class Main_Controller
{
    public function __construct()
    {
        $url_query = isset($_GET['query']) ? $_GET['query'] :  'user/index';

        //Seperating the separate according to '/'
        $query_result = explode("/", $url_query);

        if (file_exists('controllers/' . $query_result[0] . '_controller.php')) {
            include 'controllers/' . $query_result[0] . '_controller.php';
        } else {
            echo "File Does Not Exist";
            die;
        }

        $class = ucfirst($query_result[0]) . '_controller';
        $obj = new $class;

        //Calling function according to url query
        if (count($query_result) > 2) {
            $method = $query_result[1];
            $para = $query_result[2];
            $obj->$method($para);
        } elseif (count($query_result) > 1 && !(in_array('', $query_result))) {
            $method = $query_result[1];
            $obj->$method();
        } else {
            $obj->index();
        }
    }
}
new Main_Controller();

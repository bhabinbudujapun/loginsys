<?php
include 'models/base_model.php';

class User extends Base_model
{
    public $table = 'admin';

    public function __construct()
    {
        $this->table_name = $this->table;
        $a = new database();
        $this->conn = $a->conn;
    }

}

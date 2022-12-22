<?php
session_start();
session_destroy();
session_unset();
include 'views/login.php';
exit;

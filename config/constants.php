<?php

//session(message) start
session_start();

//Authorization --Access Control
//check wheather the user is logged in or not
if(!isset($_SESSION['user'])){
    $_SESSION['no-login']="<div class='btn-danger text-center'>Please login to access AdminPage<div>";
    header('location:'.'http://localhost/newproject/vtu/admin/login.php');
}




// create constant to serve non repeating value
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'niitproject');
define('SITEURL','http://localhost/newproject/vtu/');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());




?>
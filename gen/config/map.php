<?php 
    session_start();
    // if(!isset($_SESSION['user'])){
    //     $_SESSION['user'] = "Kindly login to access other pages in admin area";
    //     header('location:'.'http://localhost/newproject/vtu/gen/login.php');
    // }

    $conn = mysqli_connect('localhost','root','') or die(mysql_error());
    $db_select = mysqli_select_db($conn,'genesis')or die(mysql_error());
?>
<?php 
    session_start();
    session_destroy();
    header('location:'.'http://localhost/newproject/vtu/gen/login.php');
?>
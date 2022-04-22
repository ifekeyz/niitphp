<?php

session_start();
session_destroy(); //unset the SESSION['user']

$_SESSION["logout"]="Logout out successful";
header('location:'.'http://localhost/newproject/vtu/admin/login.php');
?>
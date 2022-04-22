<?php
    include('../config/constants.php');
    //  get the id of admin to delete
        // echo $id = $_GET['id'];
    $id = $_GET['id'];

    // create sql query to delete admin
    $sql = "DELETE FROM admin WHERE id=$id";

    // execute the query
    $res = mysqli_query($conn,$sql);

    // check wheater the query executed succesfully
    if($res==true){
        // success
        echo"Admin Successfuly deleted";
        // message
        $_SESSION['delete'] = "Admin Successfuly deleted";
        //redirect
        header("location:".SITEURL.'admin/users.php');

    }
    else{
        //fail
        $_SESSION['delete']= "Error while delecting the query";
        header("location:".SITEURL.'admin/users.php');
    }
    // redirect
?>
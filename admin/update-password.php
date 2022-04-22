<?php include('../config/constants.php');
    if(!isset($_SESSION['user'])){
        $_SESSION['no-login']="Please login to access AdminPage";
        header('location:'.SITEURL.'admin/login.php');
    }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update|Admin</title>
    <!--fivicon icon-->
    <!-- <link rel="icon" href="assets/img/fevicon.png"> -->

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/magnific.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/owl.min.css">
    <link rel="stylesheet" href="assets/css/slick-slide.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">


</head>

<body class='sc5'>

    <div class="body-overlay" id="body-overlay"></div>

<!-- dashboard-area end  -->
<div class="dashboard-course">
                <h1 class="dashboard-title"><center>Change Admin Password</center></h1>
                <form class="single-signin-form-wrap" action="" method="POST">
                        <!-- <center><h2>Admin Login</h2></center> -->
                        <?php
                            if(isset($_GET['id'])){
                                // echo$_SESSION['add'];
                                $id = $_GET['id'];
                             }
                
                         ?>
                        <br>
                        <div class="single-input-wrap">
                            <input type="password" name="oldpassword" placeholder="Old password" value=""/>
                        </div>

                        <div class="single-input-wrap">
                            <input type="password" name= "newpassword"placeholder="New Password" value=""/>
                        </div>
                        <div class="single-input-wrap">
                            <input type="password" name= "confirmpassword"placeholder="Confirm Password" value=""/>
                        </div>

                        <div class="btn-wrap">
                            <input type="hidden" name="id" value="<?php echo$id; ?>"/>
                            <button name= "submit" class="btn btn-base w-100">Change Password</button>
                        </div>

                    </form>


<?php 
    //
?>

</div>
        <!-- dashboard-left-menu start  -->



        

    <!-- all plugins here -->
    <script src="assets/js/jquery.3.6.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imageloded.min.js"></script>
    <script src="assets/js/counterup.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/magnific.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/owl.min.js"></script>
    <script src="assets/js/slick-slider.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>

<?php 
    if(isset($_POST['submit'])){
        // echo"Button Clicked";

        // get the data from Form
        $id = $_POST['id'];
        $current_password = md5($_POST['oldpassword']);
        $new_password = md5($_POST['newpassword']);
        $confirm_password = md5($_POST['confirmpassword']);

        //check
        $sql = "SELECT * FROM admin WHERE id=$id AND password='$current_password'";

        //execute
        $res = mysqli_query($conn, $sql);
        
        if($res==true){
            // check if data is available
            $count = mysqli_num_rows($res);

            if($count==1){
                //user exists and password can be change
                // echo"user found";
                //check if password match
                if($new_password==$confirm_password){
                    //updated
                    //  echo"Pasword match";
                    $sql2 = "UPDATE admin SET
                        password = '$new_password'
                        WHERE id=$id
                    ";
                    //execute the query
                    $res2 = mysqli_query($conn,$sql2);

                    // check wheater the query executed  or not
                    if($res2==true){
                        //Displace success
                        $_SESSION['errorpassword']="<div class='btn-link'>Password changed successfully</div>";
                        header('location:'.SITEURL.'admin/users.php');
                    }else{
                        // display error
                        $_SESSION['errorpassword']="Error in changing the password";
                        header('location:'.SITEURL.'admin/users.php');
                    }
                }else{
                    // redirect to
                    $_SESSION['errorpassword']="Password Provided do not Match";
                    header('location:'.SITEURL.'admin/users.php');
                }

            }else{
                //user does not exit
                $_SESSION['password']="Old Password not found";
                header('location:'.SITEURL.'admin/users.php');

            }
        }
    }
?>
</html>
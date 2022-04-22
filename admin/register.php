<?php include('../config/constants.php')?>
<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <!--fivicon icon-->
    <link rel="icon" href="assets/img/fevicon.png">

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





    <!-- breabcrumb Area Start-->

    <!-- breabcrumb Area End -->

    <div class="signin-area pd-top-130 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">

                    <form class="single-signin-form-wrap" action="" method="POST">
                        <center><h2>Admin Registration</h2></center>
                        <?php
                if(isset($_SESSION['add'])){
                    echo$_SESSION['add'];
                    unset($_SESSION['add']);
                }
                ?>
                        <br>
                        <div class="single-input-wrap">
                            <input type="text" name="fullname" placeholder="full Name">
                        </div>

                        <div class="single-input-wrap">
                            <input type="text" name= "username"placeholder="User Name">
                        </div>

                        <!-- <div class="single-input-wrap">
                            <input type="email" name= "email" placeholder="Your email">
                        </div> -->

                        <div class="single-input-wrap">
                            <input type="password" name= "password" placeholder="Password">
                        </div>
                        <div class="btn-wrap">
                            <button name= "submit" class="btn btn-base w-100">SignIn</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- back-to-top end -->
    <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div>



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

</html>


<!-- php Admin clode -->
<?php
    if(isset($_POST['submit'])){
        
        // 1. getting data from the form

        $full_name = $_POST['fullname'];
        $user_name = $_POST['username'];
        $password_ = md5($_POST['password']);

        // 2. SQL Query to save the data into database

        $sql = "INSERT INTO admin SET
        fullName = '$full_name',
        username = '$user_name',
        password = '$password_'
        ";

        // check if username is already taken
        $sql_username = "SELECT * FROM admin
        WHERE username='$user_name'
        ";


        // 3. Execute query and save into DB
      
        $res_username = mysqli_query($conn,$sql_username) or die(mysqli_query());
        $res = mysqli_query($conn,$sql) or die(mysqli_error());

        //create a session variable to display message
        if(mysqli_num_rows($res_username) >0){
            // message through session";
            
            $_SESSION['add'] = "Username is already taken....";
            //redirect
            header("location:".SITEURL.'admin/login.php');
            
        }elseif($res==TRUE){
            $_SESSION['add'] = "Admin user added succesfully";
             //redirect
             header("location:".SITEURL.'admin/index.php');
        }
        else{
            $_SESSION['add'] = "Fail to add Admin";
            header("location:".SITEURL.'admin/login.php');
        }



    }
    
?>
<?php 

    //session(message) start
session_start();


// create constant to serve non repeating value
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'niitproject');
define('SITEURL','http://localhost/newproject/vtu/');


$conn = mysqli_connect(LOCALHOST,DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
$db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());


?>
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
                        <center><h2>Admin Login</h2></center>
                        <br>
                        <?php
                    if(isset($_SESSION['login'])){
                        echo$_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                    if(isset($_SESSION['logout'])){
                        echo$_SESSION['logout'];
                        unset($_SESSION['logout']);
                    }
                    if(isset($_SESSION['no-login'])){
                        echo$_SESSION['no-login'];
                        unset($_SESSION['no-login']);
                    }
                    
                ?>
                        <center><p>Welcome admin, kindly login to continue</p></center>
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
                            <button name= "login" class="btn btn-base w-100">Login</button>
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

<?php 
    if(isset($_POST['login'])){
        // get data from lohin form
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //sql to check if exist
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

        //execute the query
        $res = mysqli_query($conn,$sql);

        // count 
        $count = mysqli_num_rows($res);

        if($count==1){
            // user available
            $_SESSION['login']= "Admin login successfully";
            $_SESSION['user'] = $username;  //To check wheater the user  
            header("location:".SITEURL.'admin');
        }else{
            //user not available
            $_SESSION['login']= "<div class='btn-danger'>Unknown Username & Password </div>";
            header("location:".SITEURL.'admin/login.php');

        }
    }
?>

</html>
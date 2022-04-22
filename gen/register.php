<?php include('./config/map.php');?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin|register</title>
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
    <div class="signin-area pd-top-130 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <h2><center>Register Admin</center></h2>
                    <form class="single-signin-form-wrap" method="POST" action="">
                        <div class="single-input-wrap">
                            <input type="text" name="fullname" placeholder="Full Name">
                        </div>
                        <div class="single-input-wrap">
                            <input type="text" name="username" placeholder="UserName">
                        </div>
                        <div class="single-input-wrap">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="single-checkbox-inner">
                            <input type="checkbox"> By clicking "create account".
                        </div>
                        <div class="btn-wrap">
                            <button name="register" class="btn btn-base w-100">Register</button>
                        </div>
                        <div class="bottom-content">
                            <a href="#">Forgottem Your Password</a>
                            <a class="strong" href="signin.html">Signin</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    if(isset($_POST['register'])){
        $full_name = $_POST['fullname'];
        $user_name = $_POST['username'];
        $pass_word = $_POST['password'];

        

        $sql = "INSERT INTO admin_register SET
        fullname = '$full_name',
        username = '$user_name',
        password = '$pass_word'
        ";

        

        $res = mysqli_query($conn,$sql) or die(mysql_error());

        if($res==true){
            echo"User is been added successfully";
        }




    }
?>

</html>
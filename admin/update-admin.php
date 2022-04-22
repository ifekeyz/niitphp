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
                <h1 class="dashboard-title"><center>Update Admin Users</center></h1>
                <form class="single-signin-form-wrap" action="" method="POST">
                        <!-- <center><h2>Admin Login</h2></center> -->
                        <?php
                            if(isset($_SESSION['add'])){
                                echo$_SESSION['add'];
                                unset($_SESSION['add']);
                             }
                             // get the ID of selected Admin
                            $id = $_GET['id'];
                            //Create SQL Query to get the details
                            $sql = "SELECT * FROM admin WHERE id=$id";
                            //execute the query
                            $res = mysqli_query($conn,$sql);
                            //check if the query is done
                            if($res==true){
                                //check if the data is available
                                $count = mysqli_num_rows($res);
                                //check whether we have admin data or not
                                if($count==1){
                                    // get the deatils
                                    // echo"Admin Available";
                                    $row = mysqli_fetch_assoc($res);

                                    $full_name = $row['fullName'];
                                    $username = $row['username'];
                                }else{
                                    //redirect
                                    header('location:'.SITEURL.'admin/users.php');
                                }
                            }
                
                         ?>
                        <br>
                        <div class="single-input-wrap">
                            <input type="text" name="fullname" placeholder="full Name" value="<?php echo$full_name; ?>"/>
                        </div>

                        <div class="single-input-wrap">
                            <input type="text" name= "username"placeholder="User Name" value="<?php echo$username; ?>"/>
                        </div>

                        <div class="btn-wrap">
                            <input type="hidden" name="id" value="<?php echo$id; ?>"/>
                            <button name= "submit" class="btn btn-base w-100">Update Admin</button>
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
        // get all the values from from to update
        $id =$_POST['id'];
        $full_name = $_POST['fullname'];
        $username = $_POST['username'];

        //create the SQL query to update admin
        $sql = "UPDATE admin SET
        fullName = '$full_name',
        username = '$username'
        WHERE id = '$id'
        ";

        // execute the query
        $res = mysqli_query($conn, $sql);

        //check if its true
        if($res==true){
            //Query executed and admin update
            $_SESSION['update']="<div class ='btn-link'>Successfully update Admin</div>";
            //redirect
            header('location:'.SITEURL.'admin/users.php');
        }else{
            //Failed to update
            $_SESSION['update']="<div class ='btn-error'>Failed to update Admin</div>";
            //redirect
            header('location:'.SITEURL.'admin/users.php');
            
        }
    }
?>

</html>
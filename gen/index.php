<?php 
include('./config/map.php');

    // session_start();

   
if(isset($_SESSION['active'])){
    if((time()-$_SESSION['active'])>10){
        //
        $_SESSION['login']= "Timeout! while doing nothing";
         
        header('location:'.'http://localhost/newproject/vtu/gen/login.php');
    
    }
    else{
        $_SESSION['active'] = time();
    }
}
    
        $_SESSION['active']=time();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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

    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="https://themefie.com/html/edufie/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->

    <section class="admin-dashboard-section">
        <div class="admin-dashboard-right-side">
            <!-- top header start  -->
            <div class="main-header">
                <div class="header-wraper">
                    <div class="row">
                        <div class="col-xl-6">
                            <span class="header-user">
                                <a href="#"><img src="assets/img/author/02.png" alt="img"></a>
                                <span>Hello,
                                    <h5>Ramjan Ali Anik</h5>
                                </span>
                            </span>
                        </div>
                        <div class="col-xl-6 align-self-center text-lg-end">
                            <div class="d-lg-flex align-items-center">
                                <div class="user-rating text-center d-inline-block">
                                    <span class="d-block">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span> 4.0 (172 Ratings)
                                </div>
                                <a class="header-btn btn btn-white" href="#">Create a new course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top header end  -->

            <!-- dashboard-area start  -->
            <div class="dashboard-area">
                <h5 class="dashboard-title">Dashboard</h5>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>12</h4>
                                <p>Enrolled Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>6</h4>
                                <p>Active Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>1</h4>
                                <p>Completed Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>12,273</h4>
                                <p>Total Student</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>10</h4>
                                <p>Total Courses</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-dashboard-inner">
                            <img src="assets/img/icon/open-book.png" alt="img">
                            <div class="media-body">
                                <h4>$1,232</h4>
                                <p>Total Earnings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- dashboard-area end  -->
            <div class="dashboard-course">
                <h5 class="dashboard-title">My Courses</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Course Name</th>
                                <th scope="col">Total Enrolled</th>
                                <th scope="col">Rating </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Java (Beginner) Programming Tutorials
                                </th>
                                <td>10</td>
                                <td>
                                    <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Java (Beginner) Programming Tutorials
                                </th>
                                <td>10</td>
                                <td>
                                    <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Java (Beginner) Programming Tutorials
                                </th>
                                <td>10</td>
                                <td>
                                    <span class="user-rating">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        4.9
                                    </span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- dashboard-left-menu start  -->
        <div class="dashboard-left-menu">
            <a href="#" class="logo"><img src="assets/img/logo.png" alt="img"></a>
            <ul>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="dashboard.html"><i class="fas fa-tachometer-alt"></i>Users</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="dashboard-profile.html"><i class="fa fa-user"></i> Models</a>
                </li>
               
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="register.php"><i class="fas fa-cog"></i>Register</a>
                </li>
                <li class="nav-item">
                    <a class="dashboard-item-menu" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </div>
    </section>

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

<?php 
    //
?>
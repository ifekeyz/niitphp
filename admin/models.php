<?php include('../config/constants.php'); 
   
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project|Users</title>
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
                <h1 class="dashboard-title"><center>Models</center></h1>
                <?php
                    if(isset($_SESSION['add'])){
                        echo$_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                   
                ?>
                <div class="table-responsive">
                  <center><a href="<?php echo SITEURL;?>admin/add-models.php"> <button class="btn-primary">Add Model</button></a></center><br><br>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">SN</th>
                                <th scope="col">Level</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <?php
                            $sql = "SELECT * FROM model ";
                            $res = mysqli_query($conn, $sql);

                            if($res==TRUE){
                                $count = mysqli_num_rows($res);
                                $sn=1;

                                if($count>0){
                                    while($rows = mysqli_fetch_assoc($res)){
                                        $id = $rows['id'];
                                        $fullname = $rows['level'];
                                        $username = $rows['active'];

                                        ?>
                                         <tr>
                                <th scope="row"><?php echo$sn++;?>
                                </th>
                                <td><?php echo$fullname;?></td>
                                <td>
                                <?php echo$username;?>
                                </td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>admin/add-models.php?id=<?php echo$id; ?>">
                                    <button class="btn-success">Update Model</button></a>
                                    <a href="<?php echo SITEURL; ?>admin/delete-models.php?id=<?php echo $id; ?>">
                                    <button class="btn-danger">Delete Model</button></a>
                                </td>
                            </tr>
                                        
                                        <?php
                                    }
                                }
                            }
                        ?>
                        <tbody>
                           
                           
                        </tbody>
                        
                    </table>
                </div>
            </div>
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

</html>


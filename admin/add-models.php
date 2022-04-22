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
                <h1 class="dashboard-title"><center>Add-Models</center></h1>
                <?php 
                    if(isset($_SESSION['img-err'])){
                        echo$_SESSION['img-err'];
                        unset($_SESSION['img-err']);
                    }
                ?>
                <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <tr>
                        <td>Level:</td>
                        <td>
                            <input type="text" name="level" placeholder="Model Title"/>
                        </td>
                    </tr><br><br>
                                      <tr>
                        <td>Select image:</td>
                        <td>
                            <input type="file" name="image"/>
                        </td>
                    </tr><br><br>  
                    <tr>
                        <td>Description:</td>
                        <td>
                            <input type="text" name="description" placeholder="Type here    "/>
                        </td>
                    </tr><br><br>  
                    <tr>
                        <td>Active:</td>
                        <td>
                            <input type="radio" name="active" value="Yes">Yes
                            <input type="radio" name="active" value="No"/>No
                        </td>
                    </tr><br><br>  
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Model" class="btn-success"/>
                        </td>
                    </tr>
                    
                </form>
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

<?php 
    if(isset($_POST['submit'])){
        // level
        $level=$_POST['level'];
        $description=$_POST['description'];
        // radio
        if(isset($_POST['active'])){
            //get avalue
            $active = $_POST['active'];
        }else{
            $active = "No";
        }
        // check for image if it is selected and set the name accordingly
        // print_r($_FILES['image']);
        // die(); //break the code

        if(isset($_FILES['image']['name'])){
            // Upload the file
            // we need image name and source path and destination path
            $image_name = $_FILES['image']['name'];
            $source_path = $_FILES['image']['tmp_name'];
            $destination_path = "./assets/img/model/".$image_name;

            //upload the image
            $upload = move_uploaded_file($source_path,$destination_path);

            // check if its uploaded
            if($upload==false){
                $_SESSION['img-err'] = "Image failed to upload";
                header('location:'.SITEURL.'admin/add-models.php');
                //stop the process
                die();
            }
        }else{
            // Dont upload the image and set it as blank
            $image_name ="";
        }


        $sql = "INSERT INTO model SET
        level = '$level',
        description = '$description',
        image_name = '$image_name',
        active = '$active'
        ";

        $res = mysqli_query($conn, $sql);
        if($res==true){
            $_SESSION['add'] = "Model added successfuly";
            header('location:'.SITEURL.'admin/models.php');
        }else{
            $_SESSION['add'] = "Model is unsuccessfuly";
            header('location:'.SITEURL.'admin/add-models.php');
        }
    }
?>

</html>


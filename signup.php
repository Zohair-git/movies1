<?php

include('connection.php');
if(isset($_POST["submitbtn"])){
    $name = $_POST['Name'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $rep_password = $_POST['rep_pass'];
    $file_name = $_FILES['pfp']['name'];
    $tmp_name = $_FILES['pfp']['tmp_name'];
    $pfp = './images/'. $file_name;
    move_uploaded_file($tmp_name,$pfp);
    $query = mysqli_query($conn , "SELECT * FROM `tbl_accounts` WHERE uname = '$name' OR email = '$email'");
    if(mysqli_num_rows($query) > 0){
        echo "<script> alert('Username or Email has already been taken')</script>";
    }
    else{
        if($password == $rep_password){
            $queryinsert = "INSERT INTO `tbl_accounts` ( `uname`, `lastname`, `email`, `password`,`pfp`) VALUES ('$name','$lname','$email','$password','$pfp')";
            $query = mysqli_query($conn , $queryinsert);
            echo "<script> alert('Registration Successful')</script>";
            if($query){
                header('location:login.php');
            }
        }
        else{
            echo "<script> alert('Password not Matched')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->
    
    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="./assets/images/account/account-bg.jpg">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    <div class="section-header-3">
                        <span class="cate">welcome</span>
                        <h2 class="title">to Boleto </h2>
                    </div>
                    <form class="account-form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email1">Firstname<span>*</span></label>
                            <input type="text" name="Name" placeholder="Enter Your FirstName" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="email1">Lastname<span>*</span></label>
                            <input type="text" name="lastname" placeholder="Enter Your LastName" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">email<span>*</span></label>
                            <input type="text" name="email" placeholder="email" id="email1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span>*</span></label>
                            <input type="password" name="pass" placeholder="Password" id="pass1" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Confirm Password<span>*</span></label>
                            <input type="password" name="rep_pass" placeholder="Password" id="pass2" required>
                        </div>
                        <div class="form-group">
                            <label for="pass2">Upload your profile picture<span>*</span></label>
                            <input type="file" name="pfp" id="pass2" required>
                        </div>
                     <div class="form-group text-center">
                            <input type="submit" name="submitbtn" value="Sign Up">
                        </div>
                    </form>
                    <div class="option">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
                    <div class="or"><span>Or</span></div>
                    <ul class="social-icons">
                        <li>
                            <a href="#0">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
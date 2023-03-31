<?php
session_start();
include('connection.php');
if(isset($_POST['loginbtn'])){
    $useremail = $_POST['uname'];
    $userpassword = $_POST['upass'];
    $resultant = mysqli_query($conn , "SELECT * FROM `tbl_accounts` WHERE uname = '$useremail' OR email = '$useremail'");
    $row = mysqli_fetch_assoc($resultant);
    if(mysqli_num_rows($resultant) > 0){
        if($userpassword == $row["password"] && $useremail == $row["email"]){
            $_SESSION["login"] = true;
            $_SESSION['check'] = true;
            $_SESSION["id"] = $row['id'];
            $_SESSION["email"] = $row["email"];
            $_SESSION["name"] = $row["uname"] . $row["lastname"];
            $_SESSION["pfp"] = $row["pfp"];
            header('location:index.php');
  }
        else{
        echo "<script> alert('Wrong Password')</script>";
        }
    }
    if($userpassword == "pass" && $useremail == "admin"){
        $_SESSION['admin'] = true;
        $_SESSION['check'] = true;
        header('location:index.php');
    }
     
  else{

        echo "<script> alert('User not Registered')</script>";
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
                        <span class="cate">hello</span>
                        <h2 class="title">welcome back</h2>
                    </div>
                    <form class="account-form" method="POST">
                        <div class="form-group">
                            <label for="email2">Email<span>*</span></label>
                            <input type="text"  name="uname" placeholder="Enter Your Email" id="email2" required>
                        </div>
                        <div class="form-group">
                            <label for="pass3">Password<span>*</span></label>
                            <input type="password" name="upass" placeholder="Password" id="pass3" required>
                        </div>
                        <div class="form-group checkgroup">
                            <!-- <input type="checkbox" id="bal2" required checked>
                            <label for="bal2">remember password</label> -->
                            <a href="forgetpass.php" class="forget-pass">Forget Password</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="loginbtn" value="log in">
                        </div>
                    </form>
                    <div class="option">
                        Don't have an account? <a href="signup.php">sign up now</a>
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
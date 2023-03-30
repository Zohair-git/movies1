<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
        $select_query ="SELECT * FROM `tbl_accounts` WHERE email = '$email' ";
    $rows = mysqli_query($conn , $select_query);
    $fetch = mysqli_fetch_array($rows);
if ($email == $fetch['email']) {

$password = $_POST['password'];
    $update = "UPDATE `tbl_accounts` SET `password`='$password' WHERE email = '$email' ";
 $run_query = mysqli_query($conn, $update) || die("Not Working");
 if($run_query){
    echo "<script>alert('Password Updated')</script>";
    header('location:login.php');
    exit();
 }   
}
else{
echo "<script>alert('account notb found')</script>";
header('location:signup.php');

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
                        <h2 class="title">Change Password</h2>
                    </div>
                    <form class="account-form" method="POST">
                        <div class="form-group">
                            <label for="email2">Email<span>*</span></label>
                            <input type="text" name="email" placeholder="Enter Your Email" id="email2" required>
                        </div>
                        <div class="form-group">
                            <label for="pass3">Password<span>*</span></label>
                            <input type="password" name="password" placeholder="Enter Your new Password Password" id="pass3" required>
                        </div>
                     
                        <div class="form-group text-center">
                            <input type="submit" name="submit" value="Change Password">
                        </div>
                    </form>
       
                    
   
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
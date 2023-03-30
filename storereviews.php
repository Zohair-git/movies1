
<?php
// session_destroy();
session_start();
include('connection.php');
if(isset($_POST['store'])){
    $reviews = $_POST['reviews'];
    $stars = $_POST['star_value'];
    $email = $_SESSION['email'];
    $insert_query = "INSERT INTO `tbl_user_reviews`(`review`, `rating`,`user_email`) VALUES ('$reviews','$stars','$email')";
    $insert_query_run = mysqli_query($conn,$insert_query);
    if($insert_query_run){
        echo 1;
        exit();
    }
    }
    $emaill = $_SESSION['email'];
    $select_query = "SELECT * FROM `tbl_user_reviews` WHERE user_email ='$emaill'";
    $select_query_run = mysqli_query($conn,$select_query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="assets/css/Feedback.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    
    <?php while($reviews = mysqli_fetch_array($select_query_run)) {?>
        <div class="movie-review-item">
                                        <div class="author">
                                            <div class="thumb">
                                                <a href="#0">
                                                    <img src="./assets/images/cast/cast04.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date"></span>
                                                <h6 class="subtitle"><a href="#0">rudra rai</a></h6>
                                                
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <h6 class="cont-title">Awesome Movie</h6>
                                            <p><?php echo $reviews['review']?> </p>
                                  
                                        </div>
                                    </div>
                
                <?php }?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

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

<?php
// session_destroy();
session_start();
include('connection.php');
if(isset($_POST['ratings'])){
    $star = $_POST['ratings'];
    $_SESSION['star'] = $star;
}
if(isset($_POST['store'])){
    $reviews = $_POST['reviews'];
    $email = $_SESSION['email'];
    $name = $_SESSION["name"];
    $pfp = $_SESSION["pfp"];
    $movie_name = $_POST["movie_name"];
    $stars = $_SESSION['star'];
    $insert_query = "INSERT INTO `tbl_user_reviews`(`review`, `rating`, `user_email`, `movie_name`)
     VALUES ('$reviews','$stars','$email',''";
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
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
<?php if(mysqli_num_rows($select_query_run) > 0){?>
<h4>Your Reviews</h4>
    <br>
    <?php while($reviewss = mysqli_fetch_array($select_query_run)) {?>
   
        <div class="movie-review-item">
                                        <div class="author">
                                            
                                                <a href="#0">
                                                    <img src="<?php echo $reviewss["pfp"]?>" style="border-radius:50px" width="50" height="50" alt="cast">
                                                </a>
                                            
                                            <div class="movie-review-info">
                                                <span class="reply-date"></span>
                                                <h6 class="subtitle"><?php echo $reviewss["Name"]?></h6>
                                                
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <div class="review">
                                              <?php echo $reviewss['rating']?> <i class="flaticon-favorite-heart-button"></i>
                                            </div>
                                            <p><?php echo $reviewss['review']?> </p>
                                  
                                        </div>
                                    </div>
                <?php }}?>
                


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
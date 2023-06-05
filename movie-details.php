<?php
session_start();
include('connection.php');
if(isset($_POST['description_button'])){
 $id = $_POST['hidden_id'];
 $select_descriptive = "SELECT * FROM `tbl_addmovies` WHERE id = '$id'";
 $select_descriptive_run = mysqli_query($conn,$select_descriptive);
 $_SESSION['reviews_hidden_id'] = $id;
 }

 $review_hidden = $_SESSION['reviews_hidden_id'];
 $select_logout_user_reviews = "SELECT * FROM `tbl_user_reviews` WHERE movie_name = '$review_hidden'";
 $select_logout_user_reviews_run = mysqli_query($conn,$select_logout_user_reviews);
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
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

 <title>Boleto - Online Ticket Booking Website HTML Template</title>
<style>

 .rating {
    display: inline-flex;
    font-size: 0;
    cursor: pointer;
    flex-direction: row-reverse;
		}
		.rating > input {
			display: none;
		}
		.rating > label:before {
			content: "\2605";
			font-size: 30px;
			color: #ccc;
		}
		.rating > input:checked ~ label:before,
		.rating > input:hover ~ label:before {
			color: #f90;
      cursor: pointer;
		}
		.rating > label {
			display: inline-block;
			margin-right: 5px;
			line-height: 30px;
			text-align: center;
			width: 30px;
		}

</style>
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
 <!-- ==========Overlay========== -->
 <div class="overlay"></div>
 <a href="#0" class="scrollToTop">
 <i class="fas fa-angle-up"></i>
 </a>
 <!-- ==========Overlay========== -->
 <!-- ==========Header-Section========== -->
 <?php include('navbar.php')?>
 <!-- ==========Header-Section========== -->
 <!-- ==========Banner-Section========== -->
 <?php while($fetch = mysqli_fetch_array($select_descriptive_run)) {?>
    <input type="hidden" id="hidden_movieid" value="<?php echo $fetch['id']?>">
    <input type="hidden" id="checking_id" value="<?php echo $fetch['id']?>">

 <section class="details-banner bg_img" data-background="./assets/images/banner/banner03.jpg">
 <div class="container">
 <div class="details-banner-wrapper">
 <div class="details-banner-thumb">
 <img src="<?php echo $fetch['banner']?>" alt="movie">
 <a href="<?php echo $fetch['trailerlink']?>" class="video-popup">
 <img src="./assets/images/movie/video-button.png" alt="movie">
 </a>
 </div>
 </div>
 <div class="details-banner-content offset-lg-3">
 <h3 class="title active" ><?php
 $_SESSION["movie_name"] = $fetch['title'];
 echo $fetch['title']?></h3>
 <div class="tags">
 <a href="#0" >English</a>
 <a href="#0">Hindi</a>

 </div>
 <a href="#0" class="button"></a>
 <div class="social-and-duration">
 <div class="duration-area">
 <div class="item">
 <i class="fas fa-calendar-alt"></i><span>Release Date: <?php echo $fetch['Movie Date']?></span>
 </div>
 <div class="item">
 <i class="far fa-clock"></i><span>Movie Watch Time: <?php echo
$fetch['Movie_watchtime']?></span>
 </div>
 </div>
 <ul class="social-share">
 <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
 <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
 <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
 <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
 <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </section>
 <?php }?>
 <!-- ==========Banner-Section========== -->
 <!-- ==========Book-Section========== -->
 <section class="book-section bg-one">
 <div class="container">
 <div class="book-wrapper offset-lg-3">
 <div class="left-side">
 <div class="item">
 <div class="item-header">
 <div class="thumb">
 <img src="./assets/images/movie/tomato2.png" alt="movie">
 </div>
 <div class="counter-area">
 <span class="counter-item odometer" data-odometer-final="88">0</span>
 </div>
 </div>
 <p>tomatometer</p>
 </div>
 <div class="item">
 <div class="item-header">
 <div class="thumb">
 <img src="./assets/images/movie/cake2.png" alt="movie">
 </div>
 <div class="counter-area">
 <span class="counter-item odometer" data-odometer-final="88">0</span>
 </div>
 </div>
 <p>audience Score</p>
 </div>
 <div class="item">
 <div class="item-header">
 <h5 class="title">4.5</h5>
 <div class="rated">
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 </div>
 </div>
 <p>Users Rating</p>
 </div>
 <div class="item">
 <div class="item-header">
 <div class="rated rate-it">
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 <i class="fas fa-heart"></i>
 </div>
 <h5 class="title">0.0</h5>
 </div>
 <p><a href="#0">Rate It</a></p>
 </div>
 </div>
 <?php

 // $s = "SELECT * FROM `tbl_addmovies`";
 // $s_run = mysqli_query($conn,$s_run);
 $fetch_s = mysqli_fetch_array($select_descriptive_run);
 ?>
 <form action="bookticket.php" method="post">
 <input type="submit" name="bookticket_button" class="custom-button p-3" value="Book tickets">
 <input type="hidden" name="hidden_id1" value="<?php echo $fetch_s['id']?>">
 </form>
 </div>
 </div>
 </section>
 <!-- ==========Book-Section========== -->
 <!-- ==========Movie-Section========== -->
 <section class="movie-details-section padding-top padding-bottom">
 <div class="container">
 <div class="row justify-content-center flex-wrap-reverse mb--50">
 <div class="col-lg-3 col-sm-10 col-md-6 mb-50">

 <div class="widget-1 widget-offer">
 <h3 class="title">Applicable offer</h3>
 <div class="offer-body">
 <div class="offer-item">
 <div class="thumb">
 <img src="./assets/images/sidebar/offer01.png" alt="sidebar">
 </div>
 <div class="content">
 <h6>
 <a href="#0">Amazon Pay Cashback Offer</a>
 </h6>
 <p>Win Cashback Upto Rs 300*</p>
 </div>
 </div>
 <div class="offer-item">
 <div class="thumb">
 <img src="./assets/images/sidebar/offer02.png" alt="sidebar">
 </div>
 <div class="content">
 <h6>
 <a href="#0">PayPal Offer</a>
 </h6>
 <p>Transact first time with Paypal and
 get 100% cashback up to Rs. 500</p>
 </div>
 </div>
 <div class="offer-item">
 <div class="thumb">
 <img src="./assets/images/sidebar/offer03.png" alt="sidebar">
 </div>
 <div class="content">
 <h6>
 <a href="#0">HDFC Bank Offer</a>
 </h6>
 <p>Get 15% discount up to INR 100*
 and INR 50* off on F&B T&C apply</p>
 </div>
 </div>
 </div>
 </div>
 <div class="widget-1 widget-banner">
 <div class="widget-1-body">
 <a href="#0">
 <img src="./assets/images/sidebar/banner/banner01.jpg" alt="banner">
 </a>
 </div>
 </div>
 </div>
 <div class="col-lg-9 mb-50">
 <div class="movie-details">
    <?php while($fetch = mysqli_fetch_array($select_descriptive_run)) {?>
        
    <section class="details-banner bg_img" data-background="./assets/images/banner/banner03.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="<?php echo $fetch['banner']?>"  alt="movie">
                    <a href="<?php echo $fetch['trailerlink']?>" class="video-popup">
                        <img src="./assets/images/movie/video-button.png" alt="movie">
                    </a>
                     </div>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title active" ><?php
                        $_SESSION["movie_name"] = $fetch['title'];
                    echo $fetch['title']?></h3>
                    <div class="tags">
                        <a href="#0" >English</a>
                        <a href="#0">Hindi</a>
       
                    </div>
                    <a href="#0" class="button"></a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class="fas fa-calendar-alt"></i><span>Release Date: <?php echo $fetch['Movie Date']?></span>
                            </div>
                            <div class="item">
                                <i class="far fa-clock"></i><span>Movie Watch Time: <?php echo $fetch['Movie_watchtime']?></span>
                            </div>
                        </div>
                        <ul class="social-share">
                            <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <?php }?>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper offset-lg-3">
                <div class="left-side">
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="./assets/images/movie/tomato2.png" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>tomatometer</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="./assets/images/movie/cake2.png" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer" data-odometer-final="88">0</span>
                            </div>
                        </div>
                        <p>audience Score</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <h5 class="title">4.5</h5>
                            <div class="rated">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <p>Users Rating</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="rated rate-it">
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                                <i class="fas fa-heart"></i>
                            </div>
                            <h5 class="title">0.0</h5>
                        </div>
                        <p><a href="#0">Rate It</a></p>
                    </div>
                </div>
                <?php 
                
                    // $s  = "SELECT * FROM `tbl_addmovies`";
                    // $s_run = mysqli_query($conn,$s_run);
                     $fetch_s = mysqli_fetch_array($select_descriptive_run);   
                ?>
                <input type="hidden" id="hidden_movieid" value="<?php echo $fetch_s['id']?>">
                <form action="bookticket.php" method="post">
                <input type="submit" name="bookticket_button"  class="custom-button p-3" value="Book tickets">
                <input type="hidden" name="hidden_id1" value="<?php echo $fetch_s['id']?>">
                </form>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
      
                    <div class="widget-1 widget-offer">
                        <h3 class="title">Applicable offer</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="./assets/images/sidebar/offer01.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">Amazon Pay Cashback Offer</a>
                                    </h6>
                                    <p>Win Cashback Upto Rs 300*</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="./assets/images/sidebar/offer02.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">PayPal Offer</a>
                                    </h6>
                                    <p>Transact first time with Paypal and
                                        get 100% cashback up to Rs. 500</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="./assets/images/sidebar/offer03.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#0">HDFC Bank Offer</a>
                                    </h6>
                                    <p>Get 15% discount up to INR 100* 
                                        and INR 50* off on F&B T&C apply</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="./assets/images/sidebar/banner/banner01.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                       
         
                        <div class="tab summery-review">
                         <!-- for login users    -->
                            <?php if(isset($_SESSION['check'])) {?>
                            <ul class="tab-menu">   
                                <li class="active">
                                    Post your reviews
                                </li>
                                <li>
                                    User reviews
                                </li>
                                <li >
                                    summery
                                </li>
                            </ul>
                                <?php }?>
                              
                                    
                                <div class="tab-area">
                                    <?php if(isset($_SESSION['check'])) {?>
                                        <div class="tab-item active">
                                            <div class="item">
                                                <div class="row">        
                                                    <div class="col-lg-8 col-md-7 col-sm-12">
                                                        <textarea id="reviews" placeholder="Post your Review" cols="10"></textarea>
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 ">
                                                            
                                                        <h5 class="mt-5 mb-3">Post your rating </h5>
                                                        
                                                        
                                                        <div class="rating ">
            <input type="radio" name="star" onclick="starFunction('5')" value="5" id="star5"><label for="star5"></label>
            <input type="radio" name="star" onclick="starFunction('4')" value="4" id="star4"><label for="star4"></label>
            <input type="radio" name="star" onclick="starFunction('3')" value="3" id="star3"><label for="star3"></label>
            <input type="radio" name="star" onclick="starFunction('2')" value="2" id="star2"><label for="star2"></label>
            <input type="radio" name="star" onclick="starFunction('1')" value="1" id="star1"><label for="star1"></label>
		</div>
                                                             </div>
                            </div>  
                            <input class="btn btn-primary form-control" id="ID_button" type="button" value="Submit Your Review">
                        </div>
                        <?php } ?>
                        <div id="ID_div"></div>
                      </div>


 <div class="tab summery-review">
 <!-- for login users -->
 <?php if(isset($_SESSION['check'])) {?>
 <ul class="tab-menu">
 <li class="active">
 Post your reviews
 </li>
 <li>
 User reviews
 </li>
 <li >
 summery
 </li>
 </ul>
 <?php }?>


 <div class="tab-area">
 <?php if(isset($_SESSION['check'])) {?>
 <div class="tab-item active">
 <div class="item">
 <div class="row">
 <div class="col-lg-8 col-md-7 col-sm-12">
 <textarea id="reviews" placeholder="Post your Review"
cols="10"></textarea>
 <br>
 </div>
 <div class="col-lg-4 col-md-4 col-sm-12 ">

 <h5 class="mt-5 mb-3">Post your rating </h5>


 <div class="rating ">
 <input type="radio" name="star" onclick="starFunction('5')" value="5" id="star5"><label
for="star5"></label>
 <input type="radio" name="star" onclick="starFunction('4')" value="4" id="star4"><label
for="star4"></label>
 <input type="radio" name="star" onclick="starFunction('3')" value="3" id="star3"><label
for="star3"></label>
 <input type="radio" name="star" onclick="starFunction('2')" value="2" id="star2"><label
for="star2"></label>
 <input type="radio" name="star" onclick="starFunction('1')" value="1" id="star1"><label
for="star1"></label>
</div>
 </div>
 </div>
 <input class="btn btn-primary form-control" id="ID_button" type="button"
value="Submit Your Review">
 </div>
 <div id="ID_div"></div>
 </div>

 <div class="tab-item ">
 <?php while($row = mysqli_fetch_array($select_logout_user_reviews_run)) {?>
 <div class="movie-review-item">
 <div class="author">

 <a href="#0">
 <img src="<?php echo $row['pfp']?>" style="border-radius:50px" width="50"
height="50" alt="cast">
 </a>

 <div class="movie-review-info">
 <span class="reply-date"></span>
 <h6 class="subtitle"><?php echo $row['Name']?></h6>
 </div>
 </div>
 <div class="movie-review-content">
 <div class="review">
 <?php echo $row['rating']?> <i class="flaticon-favorite-heart-button"></i>

 </div>

 <p><?php echo $row['review']?> </p>

 </div>
 </div>
 <?php }?>

 
 <div class="load-more text-center">
 <?php if(mysqli_num_rows($select_logout_user_reviews_run) > 0) {?>
 <a href="#0" class="custom-button transparent">load more</a>
 <?php } else {?>
   <h3 class="text-center pt-4 text-light">No Reviews</h3>
<?php }?>
 </div>
 </div>
 <div class="tab-item">
 <h5 class="sub-title">Synopsis</h5>
<br>
<p>Summary will be provided by the admin on every particular movie</p>
</div>

 <?php }?>

 <!-- for not login users -->
 <?php if(!isset($_SESSION['check'])) {?>
 <ul class="tab-menu">

 <li class="active">
 User reviews
 </li>
 <li >
 summery
 </li>
 </ul>
 <?php }?>
 <?php if(!isset($_SESSION['check'])) {?>

 <div class="tab-item active">
 <?php while($logoutuser =
mysqli_fetch_array($select_logout_user_reviews_run)) {?>
 <div class="movie-review-item">
 <div class="author">

 <a href="#0">
 <img src="<?php echo $logoutuser['pfp']?>" style="border-radius:50px"
width="50" height="50" alt="cast">
 </a>

 <div class="movie-review-info">
 <span class="reply-date"></span>
 <h6 class="subtitle"><?php echo $logoutuser['Name']?></h6>

 </div>
 </div>
 <div class="movie-review-content">
 <div class="review">
 <?php echo $logoutuser['rating']?> <i class="flaticon-favorite-heartbutton"></i>
 </div>

 <p><?php echo $logoutuser['review']?> </p>

 </div>
 </div>
 <?php }?>

 <div class="load-more text-center">
 <?php if(mysqli_num_rows($select_logout_user_reviews_run) > 0) {?>
 <a href="#0" class="custom-button transparent">load more</a>
 <?php } else {?>
    <h3 class="text-center pt-4 text-light">No Reviews</h3>
<?php }?>
 </div>

 </div>


 <div class="tab-item">
 <h5 class="sub-title">Synopsis</h5>
<br>
<p>Summary will be provided by the admin on every particular movie</p>
</div>
 </div>
 <?php }?>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </section>
 <!-- ==========Movie-Section========== -->

 <!-- ==========Newslater-Section========== -->
 <footer class="footer-section">

 <div class="container">
 <div class="footer-top">
 <div class="logo">
 <a href="index-1.html">
 <img src="./assets/images/footer/footer-logo.png" alt="footer">
 </a>
 </div>
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
 <i class="fab fa-pinterest-p"></i>
 </a>
 </li>
 <li>
 <a href="#0">
 <i class="fab fa-google"></i>
 </a>
 </li>
 <li>
 <a href="#0">
 <i class="fab fa-instagram"></i>
 </a>
 </li>
 </ul>
 </div>
 <div class="footer-bottom">
 <div class="footer-bottom-area">
 <div class="left">
 <p>Copyright © 2020.All Rights Reserved By <a href="#0">Boleto </a></p>
 </div>
 <ul class="links">
 <li>
 <a href="#0">About</a>
 </li>
 <li>
 <a href="#0">Terms Of Use</a>
 </li>
 <li>
 <a href="#0">Privacy Policy</a>
 </li>
 <li>
 <a href="#0">FAQ</a>
 </li>
 <li>
 <a href="#0">Feedback</a>
 </li>
 </ul>
 </div>
 </div>
 </div>
 </footer>
 <!-- ==========Newslater-Section========== -->
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

 <script>
        $(document).ready(function(){
                dataLoad();



            $('#ID_button').click(function(){
            var stars = $('#star').val();
                var review = $('#reviews').val();
            $.ajax({
                url: 'storereviews.php',
                type: 'POST',
                data:{
                    store: 1,
                   star_value: stars,
                   reviews: review
                },
                success:function(data){
                    if(data == 1){
                        alert('data has been inserted');
                        dataLoad();

                    }
                }
            })
        })


        })

        function dataLoad(){
            $.ajax({
                url: 'storereviews.php',
                type: 'POST',
                success: function(data) {
                    $('#ID_div').html(data);
                }
            })
        }
    </script>

    
    </body>
    </html>
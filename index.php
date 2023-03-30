<?php
session_start();
include('connection.php');
$select_query  = "SELECT * FROM `tbl_addmovies`";
$select_query_run = mysqli_query($conn,$select_query);
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
    <link rel="stylesheet" href="assets/css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>


</head>

<body>



    <!-- ==========Preloader========== -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- ==========Preloader========== -->
    <!-- ==========Overlay========== -->
    <div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- ==========Overlay========== -->

    <!-- ==========Header-Section========== -->
    <?php include('navbar.php');?>
    <!-- ==========Header-Section========== -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background="./assets/images/banner/banner01.jpg"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                    
                    </span>
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    <section class="search-ticket-section padding-top pt-lg-0">
        <div class="container">
            <div class="search-tab bg_img" data-background="./assets/images/ticket/ticket-bg01.jpg">
                <div class="row align-items-center mb--20">
                    <div class="col-lg-6 mb-20">
                        <div class="search-ticket-header">
                            <h6 class="category">welcome to Boleto </h6>
                            <h3 class="title">what movie are you looking for</h3>
                        </div>
                    </div>

                </div>
                <div class="tab-area">
                    <div class="tab-item active">
                        <form class="ticket-search-form">
                            <div class="form-group large">
                                    <input type="text" id="ID_Searchmovies" placeholder="Search for Movies">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="./assets/images/ticket/city.png" alt="ticket">
                                </div>
                                <span class="type">city</span>
                                <select class="select-bar">
                                    <option value="london">London</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="./assets/images/ticket/date.png" alt="ticket">
                                </div>
                                <span class="type">date</span>
                                <select class="select-bar">
                                    <option value="26-12-19">23/10/2020</option>
                                    <option value="26-12-19">24/10/2020</option>
                                    <option value="26-12-19">25/10/2020</option>
                                    <option value="26-12-19">26/10/2020</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="thumb">
                                    <img src="./assets/images/ticket/cinema.png" alt="ticket">
                                </div>
                                <span class="type">cinema</span>
                                <select class="select-bar">
                                    <option value="Awaken">Awaken</option>
                                    <option value="dhaka">dhaka</option>
                                    <option value="rosario">rosario</option>
                                    <option value="madrid">madrid</option>
                                    <option value="koltaka">kolkata</option>
                                    <option value="rome">rome</option>
                                    <option value="khoksa">khoksa</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    
                 
                </div>
            </div>
        </div>
    </section>    
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Main-Section========== -->
    <section class="movie-section padding-top padding-bottom bg-two">
        <div class="container">
            <div class="row flex-wrap-reverse justify-content-center">
                <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                    <div class="widget-1 widget-facility">
                        <div class="widget-1-body">
                            <ul>
                                <li>
                                    <a href="#0">
                                        <span class="img"><img src="./assets/images/sidebar/icons/sidebar01.png" alt="sidebar"></span>
                                        <span class="cate">24X7 Care</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span class="img"><img src="./assets/images/sidebar/icons/sidebar02.png" alt="sidebar"></span>
                                        <span class="cate">100% Assurance</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <span class="img"><img src="./assets/images/sidebar/icons/sidebar03.png" alt="sidebar"></span>
                                        <span class="cate">Our Promise</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="./assets/images/sidebar/banner/banner01.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                    <div class="widget-1 widget-trending-search">
                        <h3 class="title">Trending Searches</h3>
                        <div class="widget-1-body">
                            <ul>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">mars</a>
                                    </h6>
                                    <p>Movies</p>
                                </li>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">alone</a>
                                    </h6>
                                    <p>Movies</p>
                                </li>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">music event</a>
                                    </h6>
                                    <p>event</p>
                                </li>
                                <li>
                                    <h6 class="sub-title">
                                        <a href="#0">NBA Games 2020</a>
                                    </h6>
                                    <p>Sports</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget-1 widget-banner">
                        <div class="widget-1-body">
                            <a href="#0">
                                <img src="./assets/images/sidebar/banner/banner02.jpg" alt="banner">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="article-section padding-bottom">
                        <div class="section-header-1">
                            <h2 class="title">movies</h2>
                            <a class="view-all" href="movie list.php">View All</a>
                        </div>
                        <div class="row mb-30-none justify-content-center">
                            <?php while($row = mysqli_fetch_array($select_query_run)) {?>
                            <div class="col-sm-6 col-lg-4" >
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#0">
                                            <img src="<?php echo $row['banner']?>" alt="">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0 text-center">
                                            <a href="#0"><?php echo $row['title']?></a>
                                        </h5>
                                        <br>
                                        <div class="row text-center">
                                        <div class="col-lg-6">
                                        <p>Gold Seats</p>
                                        <p><?php echo $row['Gold_seats']?></p>
                                        </div>

                                        <div class="col-lg-6">
                                        <p>Plat Seats</p>
                                        <p><?php echo $row['Gold_seats']?></p>
                                        </div>
                                        </div>
                                        <br>
                                         <form action="movie-details.php" method="post">
                                            <input type="submit" name="description_button" class="ty" value="About <?php echo $row['title']?>" >
                                            <input type="hidden" name="hidden_id" value="<?php echo $row['id']?>">
                                            </form>
                                           
                                                <form action="bookticket.php" method="post">
                                                    <input type="submit" name="bookticket_button" value="Book Ticket Now">
                                                    <input type="hidden" name="hidden_id1" value="<?php echo $row['id']?>">
                                                    
                                                </form>
                                          
                                                
                                            
                                      </div>
                            </div>
                            </div>
                            <?php }?>
                         </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Movie-Main-Section========== -->

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
    <script src="assets/js/heandline.js"></script>
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
            function dataLoad(){
            $.ajax({
                url: 'storereviews.php',
                type: 'POST',
                success: function(data) {
                    $('#ID_div').html(data);
                }
            })
        }
        })

    </script>
</body>

</html>
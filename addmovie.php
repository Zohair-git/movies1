<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
  $title = $_POST['title'];
  $link = $_POST['link'];
  $gold_seat = $_POST['gold_seats'];
  $plat_seat = $_POST['plat_seats'];
  $movie_date = $_POST['movie_date'];
  $movie_time = $_POST['movie_time'];
$img = $_FILES['img']['name'];
  $img_tmp = $_FILES['img']['tmp_name'];
  $img_path = './images/' .  $img;
 move_uploaded_file($img_tmp,$img_path);
 $insert_query = "INSERT INTO `tbl_addmovies`( `banner`, `title`, `trailerlink`, `Gold_seats`, `Platinum_seats`, `Movie Date`, `Movie Time`) VALUES ('$img_path','$title','$link','$gold_seat','$plat_seat','$movie_date','$movie_time')";
 $insert_query_run = mysqli_query($conn,$insert_query);
  

  
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="css/tablestyling.css" rel="stylesheet">
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
    <title>Document</title>
      <style>
         .form-group .anchor {
  background-image: -webkit-linear-gradient(169deg, #5560ff 17%, #aa52a1 63%, #ff4343 100%);
  -webkit-transition: all ease 0.3s;
  transition: all ease 0.3s;
  border-radius: 30px;
  width: auto;
  /* padding: 0 50px; */
  height: 50px;
  text-transform: uppercase;
  margin: 0 auto;
  color:white;
  font-weight:bold;
  display:flex;
  justify-content:center;
  align-items:center;
}
.form-group .anchor:hover {
  -webkit-box-shadow: 0px 10px 15px 0px rgba(59, 55, 188, 0.5);
          box-shadow: 0px 10px 15px 0px rgba(59, 55, 188, 0.5);
}


      </style>
</head>
<body>
<div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include('navbar.php');?>
<br><br><br><br>

  <div class="container col-lg-7">
<form method="POST" enctype="multipart/form-data" >

<div class="banner-content">
                <h1><span>Upload a</span>
                <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                    
                    </span>

                </h1>
            </div>
            <br><br>

              <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Banner</label>
    <input type="file" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="img" style="border:0px; border-bottom:2px solid white;"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Title</label>
    <input type="text" class="form-control bg-transparent" id="exampleInputPassword1" name="title" placeholder="Enter Movie Title" style="border:0px; border-bottom:2px solid white;" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Trailer Link</label>
    <input type="text" class="form-control bg-transparent" id="exampleInputPassword1" name="link" placeholder="Enter Trailer Link" style="border:0px; border-bottom:2px solid white;" >
  </div>

              <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gold Seats</label>
    <input type="number" class="form-control bg-transparent" id="exampleInputPassword1" name="gold_seats" placeholder="Available Gold Seats" style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Platinium Seats</label>
    <input type="number" class="form-control bg-transparent" id="exampleInputPassword1" name="plat_seats" placeholder="Available Platinium Seats" style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Date</label>
    <input type="Date" class="form-control bg-transparent" id="exampleInputPassword1" name="movie_date" placeholder="Onscreen Date" style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Time</label>
    <input type="time" class="form-control bg-transparent" id="exampleInputPassword1" name="movie_time" placeholder="Onscreen Time" style="border:0px; border-bottom:2px solid white;" >
</div>

<div class="row">
    <div class="form-group col-lg-3">
    <input type="submit" name="submit" value="ADD MOVIE" >
  
    </div>
    <div class="form-group col-lg-4 mx-3">
    <a href="index.php" class="anchor">BACK TO HOME</a>
    </div>
</div>
              </div>

<br>






</form>
</div>
<br><br>


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
</body>
</html>
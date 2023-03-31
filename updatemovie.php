<?php
include('connection.php');
$getid = $_GET['id'];
$select_query = "SELECT * FROM `tbl_addmovies` WHERE `id` = '$getid' ";
$select_query_run = mysqli_query($conn, $select_query);
$fetch_array = mysqli_fetch_array($select_query_run); 

if(isset($_POST['updatebtn'])){
    $title = $_POST['title'];
    $link = $_POST['link'];
    $movie_date = $_POST['movie_date'];
    $movie_time = $_POST['movie_time'];
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_path = './images/' .  $img;
   move_uploaded_file($img_tmp,$img_path);
   $update_query = "UPDATE `tbl_addmovies` SET `title`='$title',`trailerlink`='$link',`Movie Date`='$movie_date',`Movie Time`='$movie_time',`banner`='$img_path' WHERE `id` = '$getid'"; 
   $update_query_run = mysqli_query($conn , $update_query);
   if($update_query_run){
    echo "<script>alert('data updated')</script>";
    header('location:showallmovies.php');
   }
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
</head>
<body>
<div class="overlay"></div>
    <a href="#0" class="scrollToTop">
        <i class="fas fa-angle-up"></i>
    </a>
    <?php include('navbar.php');?>
<br><br><br><br>


<div class="banner-content">
                <h1><span>Update Movie </span>
                <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Data</b>
                    
                    </span>

                </h1>
            </div>

            <br><br>

  <div class="container col-lg-8">
<form method="POST" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Banner</label>
    <input type="file" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp" name="img" value="<?php echo $fetch_array['banner'];?>" required style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Title</label>
    <input type="text" class="form-control bg-transparent" id="exampleInputPassword1" name="title" required value="<?php echo $fetch_array['title'];?>" style="border:0px; border-bottom:2px solid white;" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Trailer Link</label>
    <input type="text" class="form-control bg-transparent" id="exampleInputPassword1" name="link"  required style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Date</label>
    <input type="Date" class="form-control bg-transparent" id="exampleInputPassword1" name="movie_date" value="<?php echo $fetch_array['Movie Date'];?>" required style="border:0px; border-bottom:2px solid white;" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movie Time</label>
    <input type="time" class="form-control bg-transparent" id="exampleInputPassword1" name="movie_time" value="<?php echo $fetch_array['Movie Time'];?>" required style="border:0px; border-bottom:2px solid white;" >
  </div><br>
 <div class="mb-3 form-group">
  <input type="submit" name="updatebtn" value="Update Data">
</div>
</form>
</div>
<br><br><br><br>
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
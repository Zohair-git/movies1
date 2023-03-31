<?php
session_start();
include('connection.php');

$select_query = "SELECT * FROM `tbl_addmovies` ";
$run_query = mysqli_query($conn,$select_query);




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
                <h1><span>Total Movies</span>
                <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Uploaded</b>
                    
                    </span>

                </h1>
            </div>

            <br><br>
            <div class="container  col-lg-12">
<table class="table table-dark">
    <thead>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>POSTER</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>MOVIE DURATION</th>
            <th>MOVIE TYPE</th>
            <th>TRAILER</th>
            <th>DELETE & UPDATE</th>





        </tr>
    </thead>
    <tbody>
    <?php while($data=mysqli_fetch_array($run_query)){ ?>
        
        <tr>


        <td><?php echo $data['id'];?></td>
        <td><?php echo $data['title'];?></td>
        <td><img src="<?php echo $data['banner'];?>" height="100" width="150"></td>
        <td><?php echo $data['Movie Date'];?></td>
        <td><?php echo $data['Movie Time'];?></td>
        <td><?php echo $data['Movie_watchtime'];?></td>
        <td><?php echo $data['Movie type'];?></td>
        <td><iframe src="<?php echo $data['trailerlink'];?>" frameborder="0"></iframe></td>


            
                      
                 <td><a href="deletemovie.php?id=<?php echo $data['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this movie?')">DELETE</a>
            <a href="updatemovie.php?id=<?php echo $data['id'];?>" class="btn btn-primary" >UPDATEE</a></td>
            </tr>

        
        <?php } ?>

    </tbody>
</table>
</div>
<center><a href="index.php" class="btn btn-primary">BACK TO HOME</a></center>
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
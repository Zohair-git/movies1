<?php 
session_start();
  include('connection.php');
     if(isset($_POST['bookticket_button'])){
      if(isset($_SESSION['check'])){
        $id = $_POST['hidden_id1'];
        $select_bookticket ="SELECT * FROM `tbl_addmovies` WHERE id = '$id'";
        $select_bookticket_run = mysqli_query($conn,$select_bookticket);
      } 
      else{
        header('location:login.php');
      }
      }
    if (isset($_POST['submit_ticket'])) {
      $name = $_POST['name'];
      $adult = $_POST['Adults'];
      $children = $_POST['Childrens'];
      $select_name =$_POST['select_name'];
      $movie_n = $_POST['movie_n'];
      $movie_d =$_POST['movie_d'];
      $movie_t =$_POST['movie_t'];
      $user_id = $_SESSION['id'] ;
      // echo $user_id;

      $select_categories = "INSERT INTO `tbl_ticket`( `name`,  `childrens`, `Adults`, `seat_categories`,`user_id`, `movie_name` , `movie_date` , `movie_time`)
       VALUES ('$name','$adult','$children','$select_name','$user_id','$movie_n' , '$movie_d' , '$movie_t')";
      $select_categories_run = mysqli_query($conn,$select_categories);
      if ($select_categories_run) {
        header('location:summary.php');
        
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
    <br><br> <br>


    <?php while($fetching = mysqli_fetch_array($select_bookticket_run)) {?>
    <br>

    <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible"><?php echo $fetching['title'] ?></b>
                    
                    </span>
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
<br><br>


    
    <div class="container">
<form  method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control bg-transparent" style="border:0px; border-bottom:2px solid white;" placeholder="Enter Your Name" >
    </div><br>
  <!-- <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control bg-transparent" style="border:0px; border-bottom:2px solid white;"  placeholder="Enter Your Email">
  </div><br> -->
  <div class="mb-3">
    <label  class="form-label">Total Members</label>
    <input type="number" name="Adults" placeholder="Adults" class="form-control mb-2 bg-transparent" style="border:0px; border-bottom:2px solid white;" >
    <input type="number" name="Childrens" placeholder="Childrens" class="form-control bg-transparent" style="border:0px; border-bottom:2px solid white;" >
  </div><br>
  <div class="mb-3">
  <label  class="form-label">Ticket Class</label>
  <select name="select_name"class="form-control bg-transparent" id="" style="border:0px; border-bottom:2px solid white;">
    <option value="Golden Class" >Gold seats 2500RS</option>
    <option value="Plat Class">Plat seats 3000RS</option>

  </select>
  <input name = "movie_n" type="hidden" value =" <?php echo $fetching['title'] ?>">
  <input name = "movie_t" type="hidden" value =" <?php echo $fetching['Movie Time'] ?>">
  <input name = "movie_d" type="hidden" value =" <?php echo $fetching['Movie Date'] ?>">

  
   
  </div><br>

  
  <div class="row">
    <div class="form-group col-lg-3">
    <input type="submit" name="submit_ticket" value="Book a ticket" >
  
    </div>
    <div class="form-group col-lg-6">
    <input type="submit"  name="submit" value="BACK TO HOME">
    </div>
</div>

  <?php }?>
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
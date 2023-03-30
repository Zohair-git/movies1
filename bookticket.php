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
      $email = $_POST['email'];
      $adult = $_POST['Adults'];
      $children = $_POST['Childrens'];
      $select_name =$_POST['select_name'];
      $movie_n = $_POST['movie_n'];
      $movie_d =$_POST['movie_d'];
      $movie_t =$_POST['movie_t'];
      $user_id = $_SESSION['id'] ;
      // echo $user_id;

      $select_categories = "INSERT INTO `tbl_ticket`( `name`, `Email`, `childrens`, `Adults`, `seat_categories`,`user_id`, `movie_name` , `movie_date` , `movie_time`)
       VALUES ('$name','$email','$adult','$children','$select_name','$user_id','$movie_n' , '$movie_d' , '$movie_t')";
      $select_categories_run = mysqli_query($conn,$select_categories);
      if ($select_categories_run) {
        header('location:summary.php');
        
      }
    }

    
      

   

   

    
     
    ?>
<!DOCTYPE html>
<html lang="en">
<head></head>
    <title>Book a ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php while($fetching = mysqli_fetch_array($select_bookticket_run)) {?>
    <br>
    <h2 class="text-center">Tickets for <?php echo $fetching['title'] ?></h2>
    <br>
    
    <div class="container">
<form  method="post">
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control"  >
    </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Total Members</label>
    <input type="number" name="Adults" placeholder="Adults" class="form-control mb-2" >
    <input type="number" name="Childrens" placeholder="Childrens" class="form-control" >
  </div>
  <div class="mb-3">
  <label  class="form-label">Ticket Class</label>
  <select name="select_name"class="form-control" id="">
    <option value="Golden Class" >Gold seats 2500RS</option>
    <option value="Plat Class">Plat seats 3000RS</option>

  </select>
  <input name = "movie_n" type="hidden" value =" <?php echo $fetching['title'] ?>">
  <input name = "movie_t" type="hidden" value =" <?php echo $fetching['Movie Time'] ?>">
  <input name = "movie_d" type="hidden" value =" <?php echo $fetching['Movie Date'] ?>">

  
   
  </div>

  <input type="submit" name="submit_ticket" value="Book a ticket" class="btn btn-primary">
  <?php }?>
</form>

</div>
</body>
</html>
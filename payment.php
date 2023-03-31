<?php
// session_start();
include('connection.php');
   if(isset($_POST['payment_btn'])){
    {
      $ids = $_POST['hidden_id'];
      $seat = $_POST['seat_hidden'];
      echo $ids;
      $select_bookticket ="SELECT * FROM `tbl_ticket` WHERE id = '$ids' AND seat_categories = '$seat'";
      $select_bookticket_run = mysqli_query($conn,$select_bookticket);
      $fetch = mysqli_fetch_array($select_bookticket_run);
      $total = $fetch['Adults'] + $fetch['childrens'];
      echo $total; 
    $movie_name = $fetch['movie_name'];
    
   

    if ($fetch['seat_categories'] == 'Golden Class') {
        $select_movie = "SELECT * FROM `tbl_addmovies` WHERE title = '$movie_name'";
        $select_bookticket_run1 = mysqli_query($conn,$select_movie);
       
        if (condition) {
            # code...
        }
         mysqli_fetch_array($select_bookticket_run1);
        
        $gold_seat_fetch =  $fetching['Gold_seats'] ;
        $minus = $gold_seat_fetch - $total ;
        echo $minus;
        echo $gold_seat_fetch;

    $update_movie ="UPDATE `tbl_addmovies` SET `Gold_seats`='$minus'  WHERE title = '$movie_name'";
    $run_query = mysqli_query($conn , $update_movie);
    echo "hello";
    }else{
       
        $select_movie = "SELECT * FROM `tbl_addmovies` WHERE title = '$movie_name'";
        $select_bookticket_run = mysqli_query($conn,$select_movie);
        $fetching = mysqli_fetch_array($select_bookticket_run);

        $minus = $total - $fetching['Platinum_seats'];

    $update_movie ="UPDATE `tbl_addmovies` SET `Platinum_seats`='$minus' WHERE title = '$movie_name'";
    $run_query = mysqli_query($conn , $update_movie);
    

    }
    




    // $update_movie ="UPDATE `tbl_addmovies` SET `Gold_seats`='$total',`Platinum_seats`='' WHERE title = '$movie_name' AND seat_categories ='$seat'";



    } 
   
    }

?>
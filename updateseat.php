<?php 
session_start();
include('connection.php');
   
$id = $_GET['id'];
$sq_1 = "SELECT * FROM `tbl_ticket` WHERE id = '$id'";
$runs = mysqli_query($conn , $sq_1);
$fetch = mysqli_fetch_array($runs);
$child =  $fetch['childrens'];
$adult = $fetch['Adults'];
$m_id =$fetch['m_id'];

$t_person = $child + $adult;



$sq_2 = "SELECT * FROM `tbl_addmovies` WHERE id = '$m_id'";
$runaq = mysqli_query($conn , $sq_2);
$fetch_movie = mysqli_fetch_array($runaq);
$g_seat = $fetch_movie['Gold_seats'];
$p_seat = $fetch_movie['Platinum_seats'];

$G_left =  $g_seat - $t_person ;
$p_left =  $p_seat - $t_person ;



if ($fetch['seat_categories'] == 'Plat Class') {

    $up_1 = "UPDATE `tbl_addmovies` SET `Platinum_seats`='$p_left' WHERE id = '$m_id'";
    $run_u1 = mysqli_query($conn , $up_1);
    
}else {
    $up_2 = "UPDATE `tbl_addmovies` SET `Gold_seats`='$G_left' WHERE id = '$m_id'";
    $run_u2 = mysqli_query($conn , $up_2);
}

header('location:index.php');

    
    
    ?>
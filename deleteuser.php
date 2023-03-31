<?php 
include('connection.php');
$userid = $_GET['id'];
$delete_query = "DELETE FROM `tbl_accounts` WHERE `id` = '$userid' ";
$delete_query_run = mysqli_query($conn,$delete_query);
if($delete_query_run){
    header('location:showusers.php');
}


?>
<?php
 session_start();





use Dompdf\Dompdf;

 include('connection.php');

require_once('./vendor/autoload.php');


     $ids = $_GET['id'];
     $s_query = "SELECT * FROM `tbl_ticket` WHERE id = '$ids'";
     $run = mysqli_query($conn, $s_query);
     $fetch = mysqli_fetch_array($run);
     
 
 

$html = 
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>Report</title>
    <style>
    body{
        border: 3px solid black;


    }


#customers {
  border-collapse: collapse;
  width: 100%;
  margin-top: 60px;
}

#customers td, #customers th {
    
  border: 1px solid black;
  padding: 10px;
  text-align:center;
}


#customers th {
  padding-top: 0px;
  padding-bottom: 12px;
  
  background-color: lightblue;
  color: black;
  margin-top: 30px;
}
.container {
    text-align: center;

}
.footer{
text-alighn:center;

}
thead{
    margin-top:50px;

}
</style>
</head>
<body>

    <div class="container text-center"><<img src="" alt="">
    <h2>
    <b>'.$fetch['name'].' </b></h2>
    </hr>
    




    <table id = "customers" class="table ">
  <thead>
    <tr>
      <th scope="col">Childs</th>
      <th scope="col">Adults</th>
      

    </tr>
  </thead>
  <tbody>

  <tr>
  <td>'. $$fetch['childrens'] .'</td>
  <td>'. $$fetch['Adults'] .'</td>
  

</tr>


</tbody>

<thead>
<tr>
  <th scope="col">Seat categories </th>
  <th scope="col">Ticket Price</th>
  

</tr>
</thead>
<tbody>

<tr>
<td>'. $fetch['seat_categories '] .'</td>
<td>'. $fetch['seat_categories '] .'</td>


</tr>



</table>




<h3>Vaccinated</h3>
<p>Movie Name  :'. $fetch['movie_name'] .'</p>
<p>Date  :'. $fetch['movie_date'] .'</p>
<p>Time :'. $fetch['movie_time'] .'</p>


</div>



</body>
</html>';




$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','potrait');
$dompdf->render();
$dompdf->stream('Summary.pdf', ['Attachment'=>0]);


?>  



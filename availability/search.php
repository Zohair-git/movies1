<?php
include('connection.php');

$search_value = "";

// if(isset($_POST['search_word'])){


    $search_value = $_POST['data_search'];
    $selected_data_fetch = "SELECT * FROM `tbl_addmovies` WHERE title LIKE '%{$search_value}%'";
$run = mysqli_query($conn,$selected_data_fetch);


?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<?php if(isset($search_value)) {?>
<table class="text-center table">
    <thead>
        <tr>
            <th>Movie Name</th>
            <th>Gold Seats</th>
            <th>PLatinum Seats</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while($row=mysqli_fetch_array($run)){ ?>
        <tr>
            <td> <?php echo $row['title'] ?> </td>
            <td> <?php echo $row['Gold_seats'] ?> </td>
            <td> <?php echo $row['Platinum_seats'] ?> </td>        
        </tr>

        <?php } ?>
    </tbody>
</table>
<?php }?>
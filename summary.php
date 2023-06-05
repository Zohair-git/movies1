<?php
session_start();
include('connection.php');
$id = $_SESSION['id'];
$select_query = "SELECT * FROM `tbl_ticket` WHERE user_id = '$id' ORDER BY id DESC";
$run = mysqli_query($conn, $select_query);






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
.hh {
    /* margin-top : 150px;  */
    margin-top: 125px;
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
    <?php while ($row = mysqli_fetch_array($run)) { ?>

        <div class="col mt-5 hh">
            <div class="booking-summery mt-5 ms-5 bg-one">


                    <h4 class="title mt-5">booking summary</h4>
                    <ul>
                        <li>
                            <h6 class="subtitle">Movie Name:<?php echo $row['movie_name']  ?></h6>
                            <span class="info">English</span>
                        </li>
                        <li>
                            <h6 class="subtitle"><span><?php echo $row['name'] ?></span></h6>
                            <div class="info"><span><?php echo $row['movie_date'] . "  " . $row['movie_time'] ?></span><span>Tickets: <?php echo  $row['seat_categories'] ?> </span></div>
                        </li>
                        <li>
                            <h6 class="subtitle mb-0"><span>Tickets Price</span><span><?php if ($row['seat_categories'] == 'Plat Class') {
                                                                                            echo 'Rs 3000';
                                                                                        } else {
                                                                                            echo 'Rs 2500';
                                                                                        } ?></span></h6>
                            <p class="subtitle mb-0 mt-3"><span>Chilrens</span><span><?php echo $row['childrens'] ?></span>
                            <p>                                                            
                            <p class="subtitle mb-0 mt-3"><span>Adults</span><span><?php echo $row['Adults'] ?></span>
                            <p>
                            

                        </li>
                    </ul>
                    <ul>
                        <li>

                            <span class="info"><span>Children price</span><span>
                                    <?php


                                    if (
                                        $row['seat_categories'] == 'Plat Class'
                                    ) {
                                        $child_total = $row['childrens'] * 3000;
                                        $child_dis =  20 / 100 * $child_total;
                                        $child_discount = $child_total - $child_dis;
                                        echo 'Rs' . " ";
                                        echo $child_discount;
                                    } else {
                                        $child_total = $row['childrens'] * 2500;
                                        $child_dis =  20 / 100 * $child_total;
                                        $child_discount2 = $child_total - $child_dis;
                                        echo 'Rs' . " ";
                                        echo $child_discount2;
                                    }

                                    ?>
                                </span></span>


                            <span class="info"><span>Adults Price</span><span>
                                    <?php
                                    $adult = $row['Adults'];
                                    if (
                                        $row['seat_categories'] == 'Plat Class'
                                    ) {
                                        $plat_t3 = $adult * 3000;
                                        echo 'Rs' . " ";
                                        echo $plat_t3;
                                    } else {
                                        $plat_tt4 = $adult * 2500;
                                        echo 'Rs' . " ";
                                        echo $plat_tt4;
                                    }
                                    ?></span></span>

                        </li>
                    </ul>
                    <div class="proceed-area  text-center">
                <h6 class="subtitle" ><span>Amount Payable</span><span><?php if (
                                                                            $row['seat_categories'] == 'Plat Class'
                                                                        ) {
                                                                            $total_amount1 = $child_discount + $plat_t3;
                                                                            echo 'Rs ' . $total_amount1;
                                                                        } else {
                                                                            $total_amount2 = $child_discount2 + $plat_tt4;
                                                                            echo 'Rs ' .  $total_amount2;
                                                                        } ?>
                    </span></h6> 
                    <?php
                    $date_now = date("Y-m-d");
                    $move_date =$row['movie_date'];
                    if ( strtotime($date_now) < strtotime($move_date)  ) {?>
                        <a href="pdf.php?id=<?php echo $row['id']?>" class = "btn btn-danger d-flex justify-content-center" target="_blank">GENERATE PDF</a>

                       <form action="paymentmethod.php" method="post">
                                                    <input type="submit" name="payment_btn" value="proceed">
                                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id']?>">

                                                    
                                                </form>
                                          
                 <?php   } else{
                    echo "This ticket is expire";
                 } ?>
                
            </div>
            </div>

        </div>



    </div>
<?php } ?>
</div>
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
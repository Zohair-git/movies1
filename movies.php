<?php
include('connection.php');
if (isset($_POST['submit'])) {
    $search = $_POST['searchword'];
    $like_query = "SELECT *
    FROM `tbl_addmovies`
    WHERE `title` LIKE '%$search%'";
    $like_query_run = mysqli_query($conn, $like_query);

}
;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>Boleto - Online Ticket Booking Website HTML Template</title>
</head>

<body>
    <?php include('navbar.php'); ?>


    <section class="container" style="margin-top:12rem;">

        <?php
        if (mysqli_num_rows($like_query_run)) {
            while ($results = mysqli_fetch_assoc($like_query_run)) { ?>
                <div class="movie-area mb-10">
                    <div class="movie-list">
                        <div class="movie-thumb c-thumb">
                            <a href="#" class="w-100 bg_img h-100" data-background="<?php echo $results['banner'] ?>">
                                <img src="<?php echo $results['banner'] ?>" alt="movie">
                            </a>
                        </div>
                        <div class="movie-content bg-one">
                            <h5 class="title">
                                <a href="#">
                                    <?php echo $results['title'] ?>
                                </a>
                            </h5>
                            <p class="duration">
                                <?php echo $results['Movie_watchtime'] ?>
                            </p>
                            <div class="movie-tags">
                                <a href="#0">action</a>
                                <a href="#0">adventure</a>
                                <a href="#0">fantasy</a>
                            </div>
                            <div class="release">
                                <span>Release Date : </span> <a href="#0">
                                    <?php echo $results['Movie Date'] ?>
                                </a>
                            </div>
                            <ul class="movie-rating-percent">
                                <li>
                                    <div class="thumb">
                                        <img src="./assets/images/movie/tomato.png" alt="movie">
                                    </div>
                                    <span class="content">88%</span>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="./assets/images/movie/cake.png" alt="movie">
                                    </div>
                                    <span class="content">88%</span>
                                </li>
                            </ul>
                            <div class="book-area">
                                <div class="book-ticket">
                                    <div class="react-item mr-auto">
                                        <form action="bookticket.php" method="post" class="form-group">
                                            <input type="submit" name="bookticket_button" value="Book Ticket Now">
                                            <input type="hidden" name="hidden_id1" value="<?php echo $results['id'] ?>">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } else {
            ?>
            <h2 class="text-center" style="margin-top:16rem;">No Results for
                <?php echo $search ?>......!
            </h2>
        <?php } ?>
    </section>
</body>

</html>
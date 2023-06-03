<?php
include('connection.php');
if(isset($_POST['searchword'])){
    $search = $_POST['searchword'];
    echo '<script>alert('.$search.');<script>';
    $select_query = "SELECT * FROM `tbl_addmovies` WHERE 'title' LIKE %$search%";
    $select_query_run = mysqli_query($conn,$select_query);

};



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>

<?php 

while($cards = mysqli_fetch_arrray($select_query_run)){?>
<div class="movie-area mb-10">
                                <div class="movie-list">
                                    <div class="movie-thumb c-thumb">
                                        <a href="#" class="w-100 bg_img h-100" data-background="<?php echo $cards['banner']?>">
                                            <img src="<?php echo $cards['banner']?>" alt="movie">
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title">
                                            <a href="#"><?php echo $cards['title']?></a>
                                        </h5>
                                        <p class="duration"><?php echo $cards['Movie_watchtime']?></p>
                                        <div class="movie-tags">
                                            <a href="#0">action</a>
                                            <a href="#0">adventure</a>
                                            <a href="#0">fantasy</a>
                                        </div>
                                        <div class="release">
                                            <span>Release Date : </span> <a href="#0"><?php echo $cards['Movie Date']?></a>
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
                                                <div class="react-item">
                                                    <a href="#0">
                                                        <div class="thumb">
                                                            <img src="./assets/images/icons/heart.png" alt="icons">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="react-item mr-auto">
                                                    <a href="#0">
                                                        <div class="thumb">
                                                            <img src="./assets/images/icons/book.png" alt="icons">
                                                        </div>
                                                        <span>book ticket</span>
                                                    </a>
                                                </div>
                                                <div class="react-item">
                                                    <a href="#0" class="popup-video">
                                                        <div class="thumb">
                                                            <img src="./assets/images/icons/play-button.png" alt="icons">
                                                        </div>
                                                        <span>watch trailer</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                              

</section> 
</body>
</html>

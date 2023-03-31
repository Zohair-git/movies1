

<?php if(isset($_SESSION['admin'])) {?>
    <header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">  
                    <a href="index.html">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" >Home</a>
                        
                    </li>
                    <li>
                        <a  href="movie list.php">movies</a>
                       
                    </li>
          
                    <li>
                        <a href="#0">Admin Stuff</a>
                        <ul class="submenu">
                            <li>
                                <a href="addmovie.php">Add Movie</a>
                            </li>
                            <li>
                                <a href="showusers.php">Registered Users</a>
                            </li>
                            <li>
                                <a href="showallmovies.php">Movies</a>
                            </li>
                        </ul>
                    </li>   

                    <li class="header-button pr-0">
                        <a href="logout.php">Logout</a>
                        </li>
              
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
    <?php }?>
   
<?php if(isset($_SESSION['login'])){?>
<header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" class="active">Home</a>
                        
                    </li>
                    <li>
                        <a href="movie list.php">movies</a>
                       
                    </li>
          

                    <li>
                        <a href="contact.php">Contact us</a>
                    </li>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li class="header-button pr-0">
                 
                 
                            
                    <a href="logout.php">Logout</a>
                           
                    </li>
                    <div class="row align-items-center mx-4">
                            <?php $name = $_SESSION["name"];
                                $pfp = $_SESSION["pfp"];
                            ?>
                            
                            <div class="col-lg-4"><img src="<?php echo $pfp?>" style="border-radius: 100%;"  width="60" height="60"></div><div class="col-lg-8"><p><?php echo $name?></p></div>
                        </div>  
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>
  <?php }?>
       

  
<?php

if(!isset($_SESSION['check'])){?>
<header class="header-section">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="index.html">
                        <img src="./assets/images/logo/logo.png" alt="logo">
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="index.php" >Home</a>
                        
                    </li>
                    <li>
                        <a href="movie list.php">movies</a>
                     
                    </li>
          

                    <li>
                        <a href="contact.php">Contact us</a>
                    </li>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li class="header-button pr-0">
                        <a href="login.php">Sign In</a>
          
                    </li>
                    <li class="header-button pr-0">
                        <a href="signup.php">join us</a>
                    </li>
                </ul>
                <div class="header-bar d-lg-none">
					<span></span>
					<span></span>
					<span></span>
				</div>
            </div>
        </div>
    </header>

<?php }?>

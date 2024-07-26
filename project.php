<?php
 session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>
<html>
<head>
  <title>Movie Ticket Booking System</title>
  <link rel="stylesheet" type="text/css" href="project.css">
</head>

<body>
  <header>
    <nav>
      <ul> 
        <li><a href="project.php">Home</a></li>
        <li><a href="movies.php">Movies</a></li>
        <li><a href="theaters.php">Theaters</a></li>
        <li><a href="logout.php">Logout</a></li>

      </ul>
    </nav>
  </header>
<div class="slide-container">
        <span class="slider-span" id="slider-span1"></span>
        <span class="slider-span" id="slider-span2"></span>
        <span class="slider-span" id="slider-span3"></span>
        <span class="slider-span" id="slider-span4"></span>
        <span class="slider-span" id="slider-span5"></span>



        <div class="image-slider">
            <div class="slides-div" id="slide-1">
                <img src="img/7.jpeg" alt="" class="img" id="img1">
                <a href="#slider-span1" class="button" id="button-1"></a>
            </div>
            <div class="slides-div" id="slide-2">
                <img src="img/images3.jpeg" alt="" class="img" id="img2">
                <a href="#slider-span2" class="button" id="button-2"></a>
            </div>
            <div class="slides-div" id="slide-3">
                <img src="img/batman.jpeg" alt="" class="img" id="img3">
                <a href="#slider-span3" class="button" id="button-3"></a>
            </div>
             <div class="slides-div" id="slide-4">
                <img src="img/9.jpeg" alt="" class="img" id="img4">
                <a href="#slider-span4" class="button" id="button-4"></a>
            </div>
             <div class="slides-div" id="slide-5">
                <img src="img/12.jpeg" alt="" class="img" id="img5">
                <a href="#slider-span5" class="button" id="button-5"></a>
            </div>
        </div>
    </div>


  <h1>Hello, <?php echo $user_data['user_name'];?> </h1><br>
 

 <h2  style="color: white;">Welcome to Unified Cinema Movie Ticket Booking Website</h2>

  <p >Experience the Magic of Movies.Book movie tickets online and enjoy a hassle-free cinema experience. Our website offers a user-friendly interface, loyalty rewards, and the latest movie releases. Our theaters are spacious enough handle a number of viewers and we are determined to offer the best movie services to customers.Get started today and book your tickets with just a few clicks.</p>
  
 


   
  
  
</body>
</html>

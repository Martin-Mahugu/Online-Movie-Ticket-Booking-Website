<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" type="text/css" href="movies.css">
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
  </header><br>

    <div class="movie">
        
        <img class="movie poster" src="data:image/jpeg;base64,
         <?php  include 'connection.php';

                            
             $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 1");
                 if (!$result) {
                     echo "Error: " . mysqli_error($con);
                                        exit();
                                   }

                         $row = $result->fetch_assoc();
                      $image_data = $row['Image_url'];
                     $base64_data = base64_encode($image_data);
                     echo $base64_data; ?>">

                      <?php 
                          include 'connection.php';
                          
                             $movie_id = 1; 
                                $result = $con->query("SELECT movie_id, title, release_date, runtime, rating, description FROM movies WHERE movie_id = $movie_id");
                                $row = $result->fetch_assoc();
                                $movie_id = $row['movie_id'];
                                $title = $row['title'];
                               $release_date = $row['release_date'];
                                $runtime = $row['runtime'];
                                 $rating = $row['rating'];
                                   $description = $row['description'];

                            echo "<h2>" . $row['title'] . "</h2>";
                          echo "<p><strong>Release date:</strong> " . $row['release_date'] . "</p>";
                        echo "<p><strong>Runtime:</strong> " . $row['runtime'] . "</p>";
                         echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                         echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
                         echo "<a href='showtimes.php?movie_id="  . "' class='select-showtimes-btn'>Select showtimes</a>";




                       
                          ?>
    </div>
        <div class="movie">
        
        <img class="movie poster" src="data:image/jpeg;base64,
         <?php  include 'connection.php';

                            
             $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 2");
                 if (!$result) {
                     echo "Error: " . mysqli_error($con);
                                        exit();
                                   }

                         $row = $result->fetch_assoc();
                      $image_data = $row['Image_url'];
                     $base64_data = base64_encode($image_data);
                     echo $base64_data; ?>">

                      <?php 
                          include 'connection.php';
                          
                             $movie_id = 2; 
                                $result = $con->query("SELECT movie_id, title, release_date, runtime, rating, description FROM movies WHERE movie_id = $movie_id");
                                $row = $result->fetch_assoc();
                                $movie_id = $row['movie_id'];
                                $title = $row['title'];
                               $release_date = $row['release_date'];
                                $runtime = $row['runtime'];
                                 $rating = $row['rating'];
                                   $description = $row['description'];

                            echo "<h2>" . $row['title'] . "</h2>";
                          echo "<p><strong>Release date:</strong> " . $row['release_date'] . "</p>";
                        echo "<p><strong>Runtime:</strong> " . $row['runtime'] . "</p>";
                         echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                         echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
                        echo "<a href='showtimes.php?movie_id=" . $movie_id . "' class='select-showtimes-btn'>Select showtimes</a>";



                       
                          ?>
    </div>
        <div class="movie">
        
        <img class="movie poster" src="data:image/jpeg;base64,
         <?php  include 'connection.php';

                            
             $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 3");
                 if (!$result) {
                     echo "Error: " . mysqli_error($con);
                                        exit();
                                   }

                         $row = $result->fetch_assoc();
                      $image_data = $row['Image_url'];
                     $base64_data = base64_encode($image_data);
                     echo $base64_data; ?>">

                      <?php 
                          include 'connection.php';
                          
                             $movie_id = 3; 
                                $result = $con->query("SELECT movie_id, title, release_date, runtime, rating, description FROM movies WHERE movie_id = $movie_id");
                                $row = $result->fetch_assoc();
                                $movie_id = $row['movie_id'];
                                $title = $row['title'];
                               $release_date = $row['release_date'];
                                $runtime = $row['runtime'];
                                 $rating = $row['rating'];
                                   $description = $row['description'];

                            echo "<h2>" . $row['title'] . "</h2>";
                          echo "<p><strong>Release date:</strong> " . $row['release_date'] . "</p>";
                        echo "<p><strong>Runtime:</strong> " . $row['runtime'] . "</p>";
                         echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                         echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
                        echo "<a href='showtimes.php?movie_id=" . $movie_id . "' class='select-showtimes-btn'>Select showtimes</a>";




                       
                          ?>
    </div>

        <div class="movie">
        
        <img class="movie poster" src="data:image/jpeg;base64,
         <?php  include 'connection.php';

                            
             $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 4");
                 if (!$result) {
                     echo "Error: " . mysqli_error($con);
                                        exit();
                                   }

                         $row = $result->fetch_assoc();
                      $image_data = $row['Image_url'];
                     $base64_data = base64_encode($image_data);
                     echo $base64_data; ?>">

                      <?php 
                          include 'connection.php';
                          
                             $movie_id = 4; 
                                $result = $con->query("SELECT movie_id, title, release_date, runtime, rating, description FROM movies WHERE movie_id = $movie_id");
                                $row = $result->fetch_assoc();
                                $movie_id = $row['movie_id'];
                                $title = $row['title'];
                               $release_date = $row['release_date'];
                                $runtime = $row['runtime'];
                                 $rating = $row['rating'];
                                   $description = $row['description'];

                            echo "<h2>" . $row['title'] . "</h2>";
                          echo "<p><strong>Release date:</strong> " . $row['release_date'] . "</p>";
                        echo "<p><strong>Runtime:</strong> " . $row['runtime'] . "</p>";
                         echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                         echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
                        echo "<a href='showtimes.php?movie_id=" . $movie_id . "' class='select-showtimes-btn'>Select showtimes</a>";




                       
                          ?>
    </div>

        <div class="movie">
        
        <img class="movie poster" src="data:image/jpeg;base64,
         <?php  include 'connection.php';

                            
             $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 5");
                 if (!$result) {
                     echo "Error: " . mysqli_error($con);
                                        exit();
                                   }

                         $row = $result->fetch_assoc();
                      $image_data = $row['Image_url'];
                     $base64_data = base64_encode($image_data);
                     echo $base64_data; ?>">

                      <?php 
                          include 'connection.php';
                          
                             $movie_id = 5; 
                                $result = $con->query("SELECT movie_id, title, release_date, runtime, rating, description FROM movies WHERE movie_id = $movie_id");
                                $row = $result->fetch_assoc();
                                $movie_id = $row['movie_id'];
                                $title = $row['title'];
                               $release_date = $row['release_date'];
                                $runtime = $row['runtime'];
                                 $rating = $row['rating'];
                                   $description = $row['description'];

                            echo "<h2>" . $row['title'] . "</h2>";
                          echo "<p><strong>Release date:</strong> " . $row['release_date'] . "</p>";
                        echo "<p><strong>Runtime:</strong> " . $row['runtime'] . "</p>";
                         echo "<p><strong>Rating:</strong> " . $row['rating'] . "</p>";
                         echo "<p><strong>Description:</strong> " . $row['description'] . "</p>";
                         echo "<a href='showtimes.php?movie_id=" . $movie_id . "' class='select-showtimes-btn'>Select showtimes</a>";




                       
                          ?>
    </div>





</body>
</html>

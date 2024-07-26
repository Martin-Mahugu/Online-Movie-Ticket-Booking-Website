<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Showtimes</title>
    <link rel="stylesheet" type="text/css" href="showtimes.css">
</head>
<body>  

<div class="movie">
    <img class="movie poster" src="data:image/jpeg;base64,
    <?php
    include 'connection.php';
    $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 1");
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        exit();
    }
    $row = $result->fetch_assoc();
    $image_data = $row['Image_url'];
    $base64_data = base64_encode($image_data);
    echo $base64_data;
    ?>">
    <?php 
    include 'connection.php';
    $movie_id = 1;
    $result = $con->query("SELECT showtime_id, movie_id, theater_id, theater_name, showtime FROM showtimes WHERE movie_id = $movie_id");
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Theater</th><th>Showtime</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['theater_name']."</td>";
            echo "<td>".$row['showtime']."</td>";
            echo "<td><a href='novaseats.php?showtime_id=".$row['showtime_id']."&movie_id=".$movie_id."&theater_id=".$row['theater_id']."&showtime=".$row['showtime']."'>Select seats</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "No showtimes available.";
    }
    ?><br>

    <div class="movie">
    <img class="movie poster" src="data:image/jpeg;base64,
    <?php
    include 'connection.php';
    $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 2");
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        exit();
    }
    $row = $result->fetch_assoc();
    $image_data = $row['Image_url'];
    $base64_data = base64_encode($image_data);
    echo $base64_data;
    ?>">
    <?php 
    include 'connection.php';
    $movie_id = 2;
    $result = $con->query("SELECT showtime_id, movie_id, theater_id, theater_name, showtime FROM showtimes WHERE movie_id = $movie_id");
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Theater</th><th>Showtime</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['theater_name']."</td>";
            echo "<td>".$row['showtime']."</td>";
            echo "<td><a href='novaseats.php?showtime_id=".$row['showtime_id']."&movie_id=".$movie_id."&theater_id=".$row['theater_id']."&showtime=".$row['showtime']."'>Select seats</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "No showtimes available.";
    }
    ?>
</div>

<div class="movie">
    <img class="movie poster" src="data:image/jpeg;base64,
    <?php
    include 'connection.php';
    $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 3");
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        exit();
    }
    $row = $result->fetch_assoc();
    $image_data = $row['Image_url'];
    $base64_data = base64_encode($image_data);
    echo $base64_data;
    ?>">
    <?php 
    include 'connection.php';
    $movie_id = 3;
    $result = $con->query("SELECT showtime_id, movie_id, theater_id, theater_name, showtime FROM showtimes WHERE movie_id = $movie_id");
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Theater</th><th>Showtime</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['theater_name']."</td>";
            echo "<td>".$row['showtime']."</td>";
            echo "<td><a href='novaseats.php?showtime_id=".$row['showtime_id']."&movie_id=".$movie_id."&theater_id=".$row['theater_id']."&showtime=".$row['showtime']."'>Select seats</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "No showtimes available.";
    }
    ?>
</div>

<div class="movie">
    <img class="movie poster" src="data:image/jpeg;base64,
    <?php
    include 'connection.php';
    $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 4");
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        exit();
    }
    $row = $result->fetch_assoc();
    $image_data = $row['Image_url'];
    $base64_data = base64_encode($image_data);
    echo $base64_data;
    ?>">
    <?php 
    include 'connection.php';
    $movie_id = 4;
    $result = $con->query("SELECT showtime_id, movie_id, theater_id, theater_name, showtime FROM showtimes WHERE movie_id = $movie_id");
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Theater</th><th>Showtime</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['theater_name']."</td>";
            echo "<td>".$row['showtime']."</td>";
            echo "<td><a href='novaseats.php?showtime_id=".$row['showtime_id']."&movie_id=".$movie_id."&theater_id=".$row['theater_id']."&showtime=".$row['showtime']."'>Select seats</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "No showtimes available.";
    }
    ?>
</div>

<div class="movie">
    <img class="movie poster" src="data:image/jpeg;base64,
    <?php
    include 'connection.php';
    $result = $con->query("SELECT Image_url FROM movies WHERE movie_id = 5");
    if (!$result) {
        echo "Error: " . mysqli_error($con);
        exit();
    }
    $row = $result->fetch_assoc();
    $image_data = $row['Image_url'];
    $base64_data = base64_encode($image_data);
    echo $base64_data;
    ?>">
    <?php 
    include 'connection.php';
    $movie_id = 5;
    $result = $con->query("SELECT showtime_id, movie_id, theater_id, theater_name, showtime FROM showtimes WHERE movie_id = $movie_id");
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Theater</th><th>Showtime</th><th>Action</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['theater_name']."</td>";
            echo "<td>".$row['showtime']."</td>";
            echo "<td><a href='novaseats.php?showtime_id=".$row['showtime_id']."&movie_id=".$movie_id."&theater_id=".$row['theater_id']."&showtime=".$row['showtime']."'>Select seats</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } 
    else {
        echo "No showtimes available.";
    }
    ?>
</div>





</div>
</body>
</html>

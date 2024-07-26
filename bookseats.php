<?php

// Sanitize and validate user input
$name = trim($_POST['name']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$selectedSeats = $_POST['selected_seats'];
$selectedMovie = $_POST['selected_movie'];

// Check if name is not empty
if (empty($name)) {
  die("Name field cannot be empty");
}

// Check if email is valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  die("Invalid email format");
}

// Create connection
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "omtb";

$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL statement to insert booking data
$stmt = $con->prepare("INSERT INTO bookings (selected_seats, selected_movie, name, email) VALUES (?, ?, ?, ?)");

// Bind parameters and execute statement
$stmt->bind_param("ssss", $selectedSeats, $selectedMovie, $name, $email);

if ($stmt->execute()) {
  $response = array("success" => true);
} else {
  $response = array("success" => false);
}

// Return JSON response to client-side script
echo json_encode($response);

// Close statement and connection
$stmt->close();
$con->close();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movie Ticket Booking</title>
  <style type="text/css">
  body{
    
  background-image: url("img/background.jpg");
  background-size: cover;
}
  </style>
</head>
<body>

</body>
</html>
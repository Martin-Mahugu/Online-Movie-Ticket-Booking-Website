<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
     $email = $_POST['email'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
     {
        $user_id = random_num(20);
        $query = "INSERT INTO users (`user_name`, `password`, `email`) VALUES ('$user_name', '$password', '$email')";
        mysqli_query($con, $query);

        header("location:login.php");
        die;
    } else {
        echo "Please enter valid information!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Movie Ticket Booking System - Sign Up</title>
     <link rel="stylesheet" type="text/css" href="sign in.css">
</head>
<body>
   
    
    <main>
        <h2>Sign Up</h2>
        <form method="post">
            
            <label for="username">User_name:</label>
            <input type="text" id="user_name" name="user_name" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Sign Up</button>
        </form>
    </main>
    
</body>
</html>

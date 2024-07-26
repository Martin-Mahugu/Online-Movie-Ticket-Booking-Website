<?php
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
     {
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) 
            {
                $_SESSION['user_id'] = $user_data['user_id'];
                header("location: project.php");
                die;
            }
            else
            {
                echo "Invalid password";
            }
        }
        else
        {
            echo "User not found";
        }
    }
    else {
        echo "Please enter valid information!";
    }
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Movie Ticket Booking System - Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    
    
    
    <main>
        <h2>Login</h2>
        <form method="post">
            <label for="user_name">User_name:</label>
            <input type="text" id="user_name" name="user_name" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button><br><br>

        <p>If are not a registered user of the system please  sign up below</p><br><br>
     <button onclick="window.location.href='sign in.php'" type="button" class="sign in btn">Sign up</button>    
    
        </form>
    </main>

    


</body>
</html>

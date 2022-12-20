<?php
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header style="display:flex;flex-direction:row;background-color:black;height:75px;">
        <div style="margin-top:auto;margin-bottom:auto;margin-left:150px;">
            <h3><a href="HomePage.html" style="text-decoration:none;color:white;">BookStore</a></h3>
        </div>
        <div style="display:flex;flex-direction:row;margin-left:auto;margin-right:auto;color:white;margin-top:auto;margin-bottom:auto">
            <a href="#"><h4>Home</h4></a>
            <a href="HomePage.html#categories"><h4>Categories</h4></a>
            <h4><a href="#offline">Our Stores</a></h4>
            <h4><a href="#footer">Contacts</a></h4>
        </div>
        <div style="margin-left:auto;color:white">
            <a href="login.html" style="text-decoration:none;color:white">Login</a>
            |
            <a href="sign-up.html" style="text-decoration:none;color:white">Registration</a>
        </div>
    </header>
    <hr>
<form action="/signup.php" method="post">
        <label>Full name</label>
        <input type="text" name="full_name" placeholder="Full name" ><br>
        <label>Login</label>
        <input type="text" name="login" placeholder="login" ><br>
        <label>Email</label>
        <input type="text" name="email" placeholder="email"><br>
        <label>Password</label name = "password">
        <input type="password" placeholder="password" name = "password"><br>
        <label>Password confirm</label>
        <input type="password" placeholder="password_confirm" name="password_confirm"><br>
        <button class="btn-1">Войти</button>
        <p>
           You already have an account? -
            <a href="/">Sign in</a>!
        </p>
        <?php 
          if ($_SESSION['message']) {
            echo '<p class="msg"> ' .$_SESSION['message'].' </p>';
        }
          unset($_SESSION['message']);
        ?>

    </form>
</body>
</html>
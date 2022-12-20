<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header  style="display:flex;flex-direction:row;background-color:black;height:75px;" class="header">
        <div style="margin-top:auto;margin-bottom:auto;margin-left:150px;">
            <h3><a href="HomePage.html" style="text-decoration:none;color:white;">BookStore</a></h3>
        </div>
        <div style="display:flex;flex-direction:row;margin-left:auto;margin-right:auto;color:white;margin-top:auto;margin-bottom:auto" class="home">
            <a href="HomePage.html#categories"><h4>Categories</h4></a>
            <h4><a href="#offline">Our Stores</a></h4>
            <h4><a href="#footer">Contacts</a></h4>
        </div>
        <div style="margin-left:auto;color:white">
            <a href="login.php" style="text-decoration:none;color:white">Login</a>
            |
            <a href="sign-up.html" style="text-decoration:none;color:white">Registration</a>
        </div>
    </header>
        <hr>
    
       <form action="/signin.php" method="post">
        <label >Username:</label>
        <input id="inp" type="text" name="login" placeholder="username"><br>
        <label>Password:</label>
        <input id="inp" type="password" name="password" placeholder="password"><br>
        <button type="submit" class="btn-1" >Sign in</button>
        <p>
            You don't have an account? -
            <a   href="/register.php">Registration</a>
        </p>
        <?php 
          if ($_SESSION['message']) {
            echo '<p class="msg"> ' .$_SESSION['message'].' </p>';
        }
          unset($_SESSION['message']);
        ?>
    </form>

    <hr>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>company</h4>
            <ul>
              <li><a href="#">about us</a></li>
              <li><a href="#">our services</a></li>
              <li><a href="#">privacy policy</a></li>
              <li><a href="#">affiliate program</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>get help</h4>
            <ul>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">returns</a></li>
              <li><a href="#">order status</a></li>
              <li><a href="#">payment options</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>online shop</h4>
            <ul>
              <li>
                <a href="KazakhLiterature.html">kazakh lit</a>
              </li>
              <li>
                <a href="RussianLiterature.html">russian lit</a>
              </li>
              <li>
                <a href="WorldLiterature.html">world lit</a>
              </li>
              <li>
                <a href="Bestsellers.html">bestseller</a>
              </li>
              <li>
                <a href="SelfDevelopment.html">self development</a>
              </li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
              <a href="https://www.instagram.com/ongarbekov_01/"
                ><i class="fa fa-instagram"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </footer>

 
</body>
</html>
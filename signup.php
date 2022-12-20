<?php
session_start();
include 'connect.php';

 
 $full_name  = $_POST['full_name'];
 $login = $_POST['login'];
 $email  = $_POST['email'];
 $password = $_POST['password'];
 $password_confirm = $_POST['password_confirm'];

 if($password === $password_confirm){

    $password = md5($password);

    mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`,  `avatar`) VALUES (' ', '".$full_name."', '".$login."', '".$email."', '".$password."', NULL)");
    $_SESSION['message'] = 'registration was successful';
    header('Location: /index.php');
  }else{
    $_SESSION['message'] = 'passwords dont match';
    header('Location: /register.php');
     
 }
?>

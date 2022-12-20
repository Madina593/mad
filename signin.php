<?php
session_start();
include 'connect.php';

$login = $_POST['login'];
$password =md5($_POST['password']);

$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

if(mysqli_num_rows($check_user) > 0 ){
    header('Location: /profile.php');

}else{
    $_SESSION['message']= 'invalid username or password';
    header('Location: /index.php');
}
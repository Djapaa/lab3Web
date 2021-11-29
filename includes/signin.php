<?php
session_start();
require_once 'connect.php';

$email = $_POST['email'];
$password = md5($_POST['password']);
// $password = $_POST['password'];

$check_user=mysqli_query($connect , "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
if(mysqli_num_rows($check_user)>0)
{
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id"=>$user['id'],
        "full_name"=>$user['full_name'],
        "Surname"=>$user['Surname'],
        "email"=>$user['email']
    ];
    
    header('Location: /myaccount.php');

}
else{

    $_SESSION['massage_signin'] = "Неверный email или пароль";
    header('Location: /registration/signin.php');
}

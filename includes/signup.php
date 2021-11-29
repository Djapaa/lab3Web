<?php
session_start();
require_once 'connect.php';

$email=$_POST['email'];
$full_name=$_POST['Name'];
$surname=$_POST['Surname'];
$password=$_POST['password'];
$hash =(md5($email.time()));

if (empty($full_name))
{
    $_SESSION['full_name_massage'] = "Имя не введено.";
    header('Location: /registration/signup.php');
}
if (empty($surname))
{
    $_SESSION['Surname_massage'] = "Фамилия не введена.";
    header('Location: /registration/signup.php');
}
if (empty($email))
{
    $_SESSION['email_massage'] = "email не введен.";
    header('Location: /registration/signup.php');
}
if (empty($password))
{
    $_SESSION['password_massage'] = "пароль не введен.";
    header('Location: /registration/signup.php');
}

else
{
    $password = md5($password);
    // $password = $password;
    mysqli_query($connect, 
    "INSERT INTO `users` (`id`, `email`, `full_name`, `Surname`, `password`, `avatar`, `hash`)
     VALUES (NULL, '$email', '$full_name', '$surname', '$password', NULL,'$hash')");
     header('Location: /registration/signin.php');
    }


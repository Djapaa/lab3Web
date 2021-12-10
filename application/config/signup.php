<?php
session_start();
require_once 'connect.php';
$db = DataBase::getDB();

$email=$_POST['email'];
$full_name=$_POST['Name'];
$surname=$_POST['Surname'];
$password=md5($_POST['password']);
$hash =(md5($email.time()));

if (empty($full_name))
{
    $_SESSION['full_name_massage'] = "Имя не введено.";
    header('Location: /signup');
}
if (empty($surname))
{
    $_SESSION['Surname_massage'] = "Фамилия не введена.";
    header('Location: /signup');
}
if (empty($email))
{
    $_SESSION['email_massage'] = "email не введен.";
    header('Location: /signup');
}
if (empty($password))
{
    $_SESSION['password_massage'] = "пароль не введен.";
    header('Location: /signup');
}

else
{
   
    // $password = $password;
    $query =   "INSERT INTO `users` (`id`, `email`, `full_name`, `Surname`, `password`, `avatar`, `hash`) 
    VALUES (NULL, '$email','$full_name', '$surname', '$password', NULL, '$hash')";
    $db->query($query, array());
     header('Location: /signin');
    }


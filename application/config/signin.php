<?php
session_start();
require_once 'connect.php';
$db = DataBase::getDB();


        
 if(!empty($_POST['email']) && !empty($_POST['password']))
 {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    echo $email;
    echo $password;
 }
 else{

    $_SESSION['massage_signin'] = "Неверный email или пароль";
    header('Location: /signin');
}


if($check_user = $db->select("SELECT * FROM `users` WHERE `email` = {?} AND `password` = {?}", array($email,$password)))
{
    $user = $check_user;
    
    $_SESSION['user'] = [
        "id"=>$user[0]['id'],
        "full_name"=>$user[0]['full_name'],
        "Surname"=>$user[0]['Surname'],
        "email"=>$user[0]['email']
    ];
    
    header('Location: /myaccount');

}
else{

    $_SESSION['massage_signin'] = "Неверный email или пароль";
    header('Location: /signin');
}

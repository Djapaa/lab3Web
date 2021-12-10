<?php

require_once 'connect.php';

$db = DataBase::getDB();


$login = $db->selectCell("SELECT `email` FROM `users` WHERE `email` = {?}", array("admin"));// Запрос должен вывести конкретную ячейку, поэтому вызываем метод selectCell()

$email = "admin1";
$password = md5("admin1");
$full_name = "admin1";
$Surname = "admin1";
$avatar = "0";
$hash = "0";

// $check_user = $db->select("SELECT * FROM `users` WHERE `email` = {?} AND `password` = {?}", array("admin","admin"));
// var_dump($check_user);

$query =   "INSERT INTO `users` (`id`, `email`, `full_name`, `Surname`, `password`, `avatar`, `hash`) 
VALUES (NULL, '$email','$full_name', '$Surname', '$password', NULL, '$hash')";
$db->query($query, array());


    
    






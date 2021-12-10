<?php 

// require_once '../lab3web/application/config/connect.php';
require_once '../lab3web/application/config/connect.php';

$db = DataBase::getDB();

if(!isset($_SESSION)){
    session_start();
  }

// if ($_SESSION['user']['email']!= "admin" && $_SESSION['user']['password']!=md5("admin"))
// header('Location: \ ');

$fullDesct = 'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах, которое не получается при простой дубликации Здесь ваш текст.. ';

$query = "INSERT INTO `shoplist`(`id`, `gender`, `cost`, `dateAdded`, `typeOfClothing`, `fullDescription`, `photo`, `description`) VALUES (null,'1','2','3','4','5','6','7')";
$db->query($query, array());

$check_user = $db->select("SELECT * FROM `shoplist`", array());
print_r($check_user);








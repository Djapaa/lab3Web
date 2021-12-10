<?php
//session_start();
if(!isset($_SESSION)){
    session_start();
  }

  

 if(!$_SESSION['user'])
    header('Location: \signin');


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Logo</title>
</head>
<body>  -->

<div class="container">
    <div class="header">    
        <!-- <div class="menu-block profile-block">
            <a href ="#" class="logo">Logo</a> 
        </div> -->

    <div class="profile__wrapper">
        <div class="profile-info">
            <div class="profile-info__inner">
                <h2> Здравствуйте, <?= $_SESSION['user']['full_name']." ".$_SESSION['user']['Surname']?></h2>
                <h2> email: <?= $_SESSION['user']['email']?></h2>
                <a href="/application/config/logout.php" class="logout">Выход</a>
            </div>
            
        </div>
        <div class="profile-hello">


        </div>
    </div>
   
</div>

</body>

</html>
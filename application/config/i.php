<?php

    $connect = mysqli_connect('localhost', 'root', '' ,'test');
    
    if(!$connect)
    {
        die('Не подключилось к базе данных');
    }
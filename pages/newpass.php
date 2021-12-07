
<?php
require_once '../includes/connect.php';
 
// Проверка есть ли хеш
if ($_REQUEST['hash']) {
    // Кладём этот хеш в отдельную переменную 
    $hash = $_REQUEST['hash'];
    // Проверка на то, что есть пользователь с таки хешом
    if ($result = mysqli_query($connect, "SELECT `id` FROM `users` WHERE `hash`='" . $hash . "'")) {
        // Цикл для получение пользователя с таким хешом
        while( $row = mysqli_fetch_assoc($result) ) { 
            // Переменная для хранения символов 
            // Переменная для пароля

            $pass = '651';
            
            $newpass = md5($pass);

            echo "Ваш новый пароль: " . $pass; 
            echo "Ваш новый пароль: " . $newpass; 
            // Обновление пароля
            if(mysqli_query($connect, "UPDATE `users` SET `password`='$newpass' WHERE `id`=". $row['id'] ))
            {
                // Вывод нового пароля    
                echo "Success";
            }
            else{
                echo "error" . mysqli_error($connect);
            }
             /*password_hash($pass, PASSWORD_DEFAULT)*/
        } 
    } else {
        echo "Что то пошло не так";
    }
} else {
    echo "Хэша нет";
}
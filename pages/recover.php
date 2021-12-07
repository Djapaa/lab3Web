
<?php 
// Подключаем к БД
require_once '../lab3web/includes/connect.php';
 
// Проверяем нажата ли кнопка отправки формы
if (isset($_REQUEST['doGo'])) {
    // Проверка что email введён
    if ($_REQUEST['email']) {
        $email = $_REQUEST['email'];
        
        // хешируем хеш, который состоит из email и времени
        $hash = md5($email . time());
        
        // Переменная $headers нужна для Email заголовка
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <$email>\r\n";
        $headers .= "From: <mail@example.com>\r\n";
        // Сообщение для Email
        $message = '
                <html>
                <head>
                <title>Подтвердите Email</title>
                </head>
                <body>
                <p>Что бы восстановить пароль перейдите по <a href="http://example.com/pages/newpass.php?hash=' . $hash . '">ссылка</a></p>
                </body>
                </html>
                ';
        
        // Меняем хеш в БД
        mysqli_query($connect, "UPDATE `users` SET hash='$hash' WHERE email='$email'");
        // проверка отправилась ли почта
        if (mail($email, "Восстановление пароля через Email", $message, $headers)) {
            // Если да, то выводит сообщение
            echo 'Ссылка для восстановления пароля отправленная на вашу почту';
        } else {
            echo 'Произошла какая то ошибка, письмо отправилось';
        }
    } else {
        // Если ошибка есть, то выводить её 
        echo "Вы не ввели Email"; 
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/style.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>Восстановление пароля</title>
</head>
<!-- <body class="reg_body"> -->
    <!-- <header class="header_reg">
      <a class="header_reg__title" href="/index.php"><h1>LOGO</h1></a>
    </header> -->
    
    <div class="reg_body reg_wrapper__line">

        
        <main class="reg_content">
            <div class="info_center">
                <div class="siginin_option">
                    </div>
                </div>
                <div class="register_form">
                    <form action="/recover" method="post" class="form-size">
                        <div class="field">
                            <label class="field_item__labal" for="email">Адрес электронной почты:</label>
                            <div class="email-input">
                                <input class="field_item__input" type="email"  id="email" name="email">
                        </div>
                        
                        <div class="signin-button">
                            <input  class="signin-button__input" type="submit" value="Отправить" name="doGo"></input>
                        </div>
                    </div>
                </form>
            </div>
            
        </main>
    </div>
      <!--<footer>
      </footer>-->
  
<!-- </body> -->
</html>
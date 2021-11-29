
<?php
session_start();
?>
<!DOCTYPE html>
<html class="html_loyat">
  <head>
    <meta name="viewport" content="width=device-width"/>
    <meta charset="utf-8">
    <title>Регистраци </title>
    <link href="/css/style.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>
  <body class="reg_body">
    <header class="header_reg">
      <a class="header_reg__title" href="/index.html"><h1>LOGO</h1></a>
    </header>
     <main class="reg_content">
       <div class="info_center">
         <div class="siginin_option">
           <div class="title_signup bord">
             <div class="sign-up">
               Регистрация 2
              </div>
            </div>
            <div class="title_signin">
              <div class="sign-in">
                <a class ="sign_item__link" href="./signin.php">Вход</a>
              </div>
            </div>
            <div class ="line"></div>
          </div>
        </div>
        
        <div class="register_form">
        <form action="/registration/data.php" method="POST" class="form-size" enctype="multipart/form-data">
              <div class="field">
                <label class="field_item__labal"for="email">Адрас электронной почты:</label>
                  <div>
                    <input class="field_item__input"   name="email" >
                  </div>
              </div>
              <div class="field">
                <label class="field_item__labal" for="name">Имя:</label>
                  <div>
                    <input class="field_item__input" type="text"   name="Name">
                  </div>
              </div>
              <div class="field">
                <label class="field_item__labal" for="surname">Фамилия:</label>
                  <div>
                    <input class="field_item__input" type="text" name="Surname">
                  </div>
              </div>
              <div class="field">
                <label class="field_item__labal" for="password">Пароль:</label>
                  <div>
                    <input class="field_item__input" name="password" type="password" >
                  </div>
              </div>
              <div class="field">
                <label class="field_item__labal" for="userfile">Avatar:</label>
                  <div>
                    <input class="field_item__input" name="userfile" type="file" >
                  </div>
              </div>
                <div class="signin-button">
                     <input  class="signin-button__input" type="submit" value="Зарегистрироваться"></input>
                </div>
            </form>

        </div>
         </div>
     </main>
      <!--<footer>
      </footer>-->
  </body>
</html>
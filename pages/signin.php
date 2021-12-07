<?php 
session_start();

?>
         
<!-- <!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width"/>
    <meta charset="utf-8">
    <title>Регистраци</title>
    <link href="/css/style.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head>
  <body class="reg_body"> -->
    <!-- <header class="header_reg">
      <a class="header_reg__title" href="/index.php"><h1>LOGO</h1></a>
    </header> -->
    <div class="reg_body ">
     <main class="reg_content reg_wrapper__line">
         <div class="info_center">
           <div class="siginin_option">
             <div class="title_signup ">
               <div class="sign-up">
                 <a class ="sign_item__link" href="/signup">Регистрация</a>
                </div>
              </div>
              <div class="bord title_signin">
                <div class="sign-in">
                  Вход
                </div>
              </div>
              <div class ="line"></div>
            </div>
          </div>
          <div class="register_form">
            <form action="../includes/signin.php" method="POST" class="form-size">
              <div class="field">
                <label class="field_item__labal" for="email">Адрас электронной почты:</label>
                <div class="email-input">
                  <input class="field_item__input" type="text"  id="email" name="email">
                </div>
              </div>
              <div class="field">
                <label class="field_item__labal"for="password">Пароль:</label>
                <div>
                  <input class="field_item__input" name="password" type="password">
                </div>
                
              </div>
              
              <div class="signin-button">
                <input  class="signin-button__input" type="submit" value="Войти"></input>
                <?php
                      if($_SESSION['massage_signin'])
                      {
                        echo '<span>'. $_SESSION['massage_signin'] .'</span>';
                      }
                      unset($_SESSION['massage_signin']);
                      ?>
                </div>
                
                <div class ="forget-password">
                  <a href="/recover">Восстановить пароль.</a>
                </div>
                
              </form>
            </div>
          </main>
        </div>
          <!--<footer>
            </footer>-->
          </body>
          </html>
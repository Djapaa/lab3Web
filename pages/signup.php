
<?php
session_start();

?>

<!-- <!DOCTYPE html>
<html class="html_loyat">
  <head>
    <meta name="viewport" content="width=device-width"/>
    <meta charset="utf-8">
    <title>Регистраци</title>
    <link href="/css/style.css" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
  </head> -->
  <!-- <body class="reg_body"> -->
    <!-- <header class="header_reg">
      <a class="header_reg__title" href="/index.php"><h1>LOGO</h1></a>
    </header> -->
    <div class="reg_body">

      <main class="reg_content reg_wrapper__line">
        <div class="info_center">
          <div class="siginin_option">
            <div class="title_signup bord">
              <div class="sign-up">
                Регистрация
              </div>
            </div>
            <div class="title_signin">
              <div class="sign-in">
                <a class ="sign_item__link" href="/signin">Вход</a>
              </div>
            </div>
            <div class ="line"></div>
          </div>
        </div>
        <div class="register_form">
          <form action="../includes/signup.php" method="POST" class="form-size" enctype="multipart/form-data">
            <div class="field">
              <label class="field_item__labal"for="email">Адрас электронной почты:</label>
              <div>
                <input class="field_item__input"  id="email" name="email" value="">
              </div>
              
              <?php
                      if($_SESSION['email_massage'])
                      {
                        echo'<span>'. $_SESSION['email_massage'] .'</span>';
                      }
                      unset($_SESSION['email_massage']);
                      ?>
                    
                  </div>
                  <div class="field">
                    <label class="field_item__labal" for="name">Имя:</label>
                    <div>
                      <input class="field_item__input" type="text"   name="Name" value="">
                    </div>
                    <span>
                      <?php
                      if($_SESSION['full_name_massage'])
                      {
                        echo'<span>'. $_SESSION['full_name_massage'] .'</span>';
                      }
                      unset($_SESSION['full_name_massage']);
                      ?>
                    </span>
                  </div>
                  <div class="field">
                    <label class="field_item__labal" for="surname">Фамилия:</label>
                    <div>
                      <input class="field_item__input" type="text" name="Surname" value="">
                      <span>
                        <?php
                      if($_SESSION['Surname_massage'])
                      {
                        echo'<span>'. $_SESSION['Surname_massage'] .'</span>';
                      }
                      unset($_SESSION['Surname_massage']);
                      ?>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="field_item__labal" for="password">Пароль:</label>
                  <div>
                    <input class="field_item__input" name="password" type="password" value="">
                    <span>
                      <?php
                      if($_SESSION['password_massage'])
                      {
                        echo'<span>'. $_SESSION['password_massage'] .'</span>';
                      }
                      unset($_SESSION['password_massage']);
                      ?>
                    </span>
                  </div>
                </div>
                <div class="field">
                  <label class="field_item__labal" for="file">Avatar:</label>
                  <div>
                    <input class="field_item__input" name="file" type="file" value="">
                  </div>
                </div>
                <div class="signin-button">
                  <input  class="signin-button__input" type="submit" value="Зарегистрироваться"></input>
                </div>
              </form>
            </div>
        
          </div>
        </main>
      </div>
        <!--<footer>
          </footer>-->
  <!-- </body> -->
</html>
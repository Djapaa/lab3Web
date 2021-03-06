

<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet" type="text/css"/>
    <title>Logo</title>
</head>
<body class="body body__wrapper"> 
<header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="menu-block">
                    <a href ="#" class="logo menu-block__inner">Logo</a>
                        <ul class="floornav adaptive__none">
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__active ">Женское</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__active">Мужское</a>
                            </li>
                        </ul>
                    <div class="searhc">
                        <form class="searhc-form" action="#">
                            <input class="search-form__input" placeholder="Искать товары и бренды" type="searhc">
                        </form>
                    </div>
                    <div class="menu-block__icons">
                        <a href="/registration/signin.php"class="icons-link">
                            <span class="icons-link_item__icon icon-kind_reg"></span>
                               
                        </a>

                        <a href="myaccount.php" class="icons-link">
                            <span class="icons-link_item__icon icon-kind_favorite"></span>
                        </a>

                        <a href="#" class="icons-link">
                            <span class="icons-link_item__icon icon-kind_buy"></span>
                        </a>
                    </div>
                </div>
                <div class="menu-block">
                    <nav>
                        <ul class="floornav">
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Новинки</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Обувь</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Одежда</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Аксессуары</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Бренды</a>
                            </li>
                            <li class="menu-block__inner">
                                <a href ="#" class="floor-link floor-link__size floor-link__active">Для спорта</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
        <main class="main">
            <div class="container">
                <div class="main_content">
                    <div class="container1">
                        <a class="container_items  wrap">
                            <picture class="picture">
                                    
                            </picture>
                        </a>
                        <div class="container_items items__p ">
                            <div class="calc">
                                <a href ="/calcAndLab/calc.html" class="calc_link calc_link__active">Калькулятор</a>
                                <a href ="/calcAndLab/task.html" class="calc_link calc_link__active">Task1-3</a>
                            </div>
                        </div>
                    </div>
                    <div class="container1">
                        <a class="container_items  wrap">
                            <picture class="picture">
                                    
                            </picture>
                        </a>
                        <div class="container_items items__p ">
                            <div class="calc">
                                <a href ="/ClassLab/index.html" class="calc_link calc_link__active">Калькулятор</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
        
        <script src="/JsFils/header.js"></script>
</body>

</html>
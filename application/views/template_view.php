
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
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
                    <a href ="/" class="logo menu-block__inner">Logo</a>
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
                        <a href="/myaccount"class="icons-link">
                            <span class="icons-link_item__icon icon-kind_reg"></span>
                               
                        </a>

                        <a href="/myaccount" class="icons-link">
                            <span class="icons-link_item__icon icon-kind_favorite"></span>
                        </a>

                        <a href="/myaccount" class="icons-link">
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
						<?php include 'application/views/'.$content_view; ?>
						<!--
						<h2>Welcome to Accumen</h2>
						<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
						<p>
							This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
						</p>
						-->
		<script src="/JsFils/calc.js"></script>
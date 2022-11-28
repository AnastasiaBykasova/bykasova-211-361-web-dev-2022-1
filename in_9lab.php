<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/in_9lab.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Быкасова Анастасия Сергеевна, 211-361. ЛР_9, вариант 8</title>
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header-line"> 
            <div class="nav">
                <a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>
                <a data-content="Achievements" href="achievements.php">Achievements &#36;</a>
                <a data-content="Log in" href="login.php">Log in &#10149;</a>
                <a data-content="Feedback" href="feedback.php">Feedback &#8258;</a>
                <a data-content="Math-functions" href="math_6lab.php">Math-functions &#9731;</a>
                <a data-content="Калькулятор" href="in_7lab.html">Калькулятор &infin;</a>
                <a data-content="Cats facts" href="in_8lab.php">Cats facts &#10048;</a>
                <a data-content="PHP functions" href="in_9lab.php">PHP functions &#10149;</a>
                <a data-content="Text analysis" href="in_10lab.php">Text analysis</a>
                <img src="pictures/polytech_logo_main_RGB.png" alt="a photo" id="logo-poly" height="30">
            </div>
            <br><div class="nav-2">
                <a class="my-name">Анастасия Быкасова, 211-361</a>
                <a class="lab-number">Лабораторная работа №9</a>
                <a class="var-number">Вариант 8</a>
            </div>
        </div>
    </div>        
    </header>
    <main>
    <div class="background">
        <div class="php-start">
            <?php include "php_extra/in_9lab_types.php" ?>
        </div>
    </div>        
    </main>
    <footer class="footer">
    <div class="down-line">
        <div class="bottom-items">
            <a class="text-email">&#9993; Почта:</a>
            <a class="email" href="#">nastybykasova@gmail.com</a>
            <a class="text-phone">&#9990; Телефон:</a>
            <a class="number-phone" href="#">+7(999)999-99-99</a>
            <a class = "foot-date" href="#"><?php require "php_extra/date_3lab.php" ?></a>
        </div>
    </div>
    </footer>  
</body>
</html>
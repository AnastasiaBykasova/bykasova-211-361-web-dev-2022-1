<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/feedback_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Feedback_page</title>
</head>
<body>
    <header>
    <div class="container">
        <div class="header-line">
            <div class="nav">
                <a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>
                <a data-content="Achievements" href="achievements.php">Achievements &#36;</a>
                <a data-content="Log in" href="login.php">Log in &#10149;</a>
                <a data-content="Feedback" id="feedback" href="feedback.php">Feedback &#8258;</a>
                <a data-content="Math-functions" href="math_6lab.php">Math-functions &#9731;</a>
                <a data-content="Калькулятор" href="in_7lab.html">Калькулятор &infin;</a>
                <a data-content="Cats facts" href="in_8lab.html">Cats facts &#10048;</a>
                <a data-content="PHP functions" href="in_9lab.php">PHP functions &#10149;</a>
                <a data-content="Text analysis" href="in_10lab.php">Text analysis</a>
            </div>
        </div>            
    </div>
    </header>
    <main>
    <div class="background-fb">
        <div class="container-fb-form">
            <form class="feedback_form" action="home_4lab.php" autocomplete="off" method="post" name="feedback_form">
                <h1 class="name-fb">Feedback</h1>
                <!--<p><a class="hp-back" href="index.html"><i>На главную</i> &#8617;</a></p>-->
                <div class="elements-fb">
                    <p>ФИО: <input type="text" name="name-input"placeholder="Введите фамилию, имя и отчество" size="40" value="<?php if (isset($_GET['name-input'])){
                        echo $_GET['name-input']; }?>"/></p>
                    <p>Email: <input type="email" name="email-input"placeholder="Введите email" size="30" value="<?php if (isset($_GET['email-input'])){
                        echo $_GET['email-input']; }?>"/></p>
                    <div class="from-where">
                        <p>Откуда узнали о нас? </p>
                        <p><input type="radio" name="type-input" value="1" <?php if (isset($_GET['type-input']) & $_GET['type-input']='1'){
                        echo 'checked';}?>/>В школе/в университете/на работе</p>
                        <p><input type="radio" name="type-input" value="2" <?php if (isset($_GET['type-input']) & $_GET['type-input']='2'){
                        echo 'checked';}?>/>Из социальных сетей</p>
                        <p><input type="radio" name="type-input" value="4" <?php if (isset($_GET['type-input']) & $_GET['type-input']='4'){
                        echo 'checked';}?>/>Из рекламы</p>
                    </div>
                    <p>Тип обращения: 
                    <select size="1" name="letter-type" id="letter-type">
                        <option value="1">Предложение</option>
                        <option value="2">Жалоба</option>                        
                    </select></p>
                    <div class="appeal-text">
                        <p>Текст сообщения: </p>
                        <textarea name="tell-us-message" placeholder="Введите текст" rows="5" wrap="soft"></textarea>
                    </div>
                    <p>Вложения: <input type="file" name="file-input" multiple></p>
                    <p>Даю согласие на обработку персональных данных <input type="checkbox"></p>
                    <p><div class="buttons"><input type="reset"><input type="submit"></div></p>
                </div>
            </form>
        </div>
    </div>
    </main>
    <footer>
    <div class="down-line">
        <div class="bottom-items">
            <a class="my-name">&#9802; Анастасия Быкасова, 211-361</a>
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
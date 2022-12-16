<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles/home_style_4lab.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Feedback_page</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>
                        <a data-content="Contacts" href="#go-to-footer">Contacts &#9734;</a>
                        <a data-content="Achievements" href="achievements.php">Achievements &#36;</a>
                        <a data-content="Log in" href="login.php">Log in &#10149;</a>
                        <a data-content="Feedback" href="feedback.php">Feedback &#8258;</a>
                        <a data-content="Math-functions" href="math.php">Math-functions &#9731;</a>
                        <a data-content="Калькулятор" href="in_7lab.php">Калькулятор &infin;</a>
                        <a data-content="Cats facts" href="in_8lab.php">Cats facts &#10048;</a>
                        <a data-content="PHP functions" href="in_9lab.php">PHP functions &#10149;</a>
                        <a data-content="Text analysis" href="in_10lab.php">Text analysis</a>
                        <a data-content="Multiplication table" id="multti" href="in_11lab.php">Multiplication table</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-fb">
            <div class="container-fb-form">
                <h1 class="name-fb">Feedback</h1>
                <div class="elements-fb">
                    <?php
                    echo '<p class="hello-fb"> Здравствуйте, '.$_POST['name-input'].'!</p>';
                    if ($_POST['letter-type'] == '1') {
                        echo '<p>Спасибо за ваше предложение!</p>';
                        echo '<textarea>'.$_POST['tell-us-message'].'</textarea>';
                    }else {
                        echo '<p>Мы рассмотрим Вашу жалобу:</p>';
                        echo '<textarea>'.$_POST['tell-us-message'].'</textarea>';
                    }
                    if (isset($_POST['file-input']) & $_POST['file-input'] != '') {
                        echo '<p>Вы приложили следующий файл: '.$_POST['file-input'].'</p>';
                    }
                    echo '<p><a class="rewrite-fb" href="feedback.php?name-input='.$_POST['name-input'].'&email-input='.$_POST['email-input'].'&type-input='.$_POST['type-input'].'"><i>Заполнить снова</i></a></p>';
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer>
    <a name="go-to-footer"></a>
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
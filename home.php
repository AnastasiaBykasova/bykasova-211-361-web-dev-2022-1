<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="home_style.css">
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
                        <a data-content="Homepage" href="<?php 
                            $name='Homepage &#9749;'; 
                            $link='index.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Контакты" href="#go-to-footer">Контакты &#9734;</a>
                        <a data-content="Достижения" href="<?php 
                            $name='Достижения &#36;'; 
                            $link='achievements.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                        <a data-content="Log in" href="<?php 
                            $name='Log in &#10149;'; 
                            $link='login.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Feedback" href="<?php 
                            $name='Feedback &#8258;'; 
                            $link='feedback.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
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
                <a class = "foot-date" href="#"><?php require "date.php" ?></a>
            </div>
        </div>
    </footer>  
</body>
</html>
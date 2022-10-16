<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <?php require "name.php"; ?>
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
                            echo $link; ?>"> 
                            <?php
                            if( $current_page )
                                echo $name;
                            ?>
                        </a>
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
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                        <a data-content="Feedback" href="<?php 
                            $name='Feedback &#8258;'; 
                            $link='feedback.php'; 
                            $current_page=true; 
                            echo $link; ?>"> 
                            <?php 
                            if( $current_page ) 
                                echo $name;
                            ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="elements">
            <div class="text-desc">
                <h1 class="description">It's a simple text</h1>
                <p>Создание сайта нацелено на получение<br> знаний об <b>HTML, CSS, 
                    PHP</b> и <b>JavaScript</b>. 
                </p>
            </div>
            <div class="pictures-hp">
                <?php 
                $s = date('s');
                $os = $s % 2;
                if ($os === 0)
                $name = 'bf1.png';
                else
                $name = 'bf2.png';
                echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 100px>';
                ?>
            </div>
            <div class = "list">
            <?php require "list.php"?>
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

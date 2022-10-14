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
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <a data-content="Контакты" href="#">Контакты &#9734;</a>
                        <a data-content="Достижения" href="#">Достижения &#36;</a>
                        <!--<a data-content="Log in" href="login.php">Log in &#10149;</a>-->
                        <a data-content="Log in" href="<?php 
                            $name='Log in &#10149;'; 
                            $link='login.php'; 
                            $current_page=true; 
                            echo $link; 
                        ?>"> <?php 
                        if( $current_page ) 
                            echo $name;
                        ?></a>
                        <!--<a data-content="Feedback" href="feedback.php">Feedback &#8258;</a>-->
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

            
            <!--
            <div class="bird-pic">
                <img src="bird2.png" height="300px">
            </div>
            <div class="cat-pic">
                <img src="cat.png" height="200px">
            </div>-->
            <!--
            <table class="table" id="table1">
                <caption>Список выполненных заданий (ЛР №1)</caption>
                <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Условие</th>
                        <th>Статус выполнения</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Шапка с меню (навигация по разделам)</td>
                        <td>Done &#10004;</td>
                    </tr>
                    <tr>
                        <td>2</td>
                         <td>Футер с контактной информацией/копирайтом</td>
                        <td>Done &#10004;</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Фотография и/или другие изображения</td>
                        <td>Done &#10004;</td></tr>
                    <tr>
                        <td>4</td>
                        <td>Таблица</td>
                        <td>Done &#10004;</td></tr>
                    <tr>
                        <td>5</td>
                        <td>Подключён шрифт с Google Fonts</td>
                        <td>Done &#10004;</td></tr>
                        </tbody>
            </table>-->
            <table class="table" id="table2">
                <caption>Список выполненных заданий (ЛР №2)</caption>
                <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Условие</th>
                        <th>Требования</th>
                        <th>Статус выполнения</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Доработать форму обратной связи</td>
                        <td>
                            <ul>
                                <li>ФИО (текстовое);</li>
                                <li>email (текстовое);</li>
                                <li>откуда узнали о нас (радио-кнопки);</li>
                                <li>тип обращения (жалоба/предложение, селектор);</li>
                                <li>текст сообщения (большое текстовое поле);</li>
                                <li>вложения (файл);</li>
                                <li>даю согласие на обработку персональных данных (чекбокс)</li>
                            </ul>
                        </td>
                        <td>Done &#10004;</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Сделать форму для аутентификации</td>
                        <td>
                            <ul>
                                <li>логин (текстовое);</li>
                                <li>пароль (пароль);</li>
                                <li>"запомнить меня" (чекбокс)</li>
                            </ul>
                        </td>
                        <td>Done &#10004;</td>
                    </tr>
                </tbody>
            </table>
            <div class = "list">
            <?php require "list.php"?>
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
            </div>
            <p class = "foot-date"><?php require "date.php" ?></p>
        </div>
    </footer>  
</body>
</html>

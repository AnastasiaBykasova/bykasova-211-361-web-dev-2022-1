<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="in_9lab.css">
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
                <img src="polytech_logo_main_RGB.png" alt="a photo" id="logo-poly" height="50">
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
        <?php
            $min_value=10;	// минимальное значение, останавливающее вычисления
            $max_value=20;	// максимальное значение, останавливающее вычисления
            $precison = 3;  // точность округления, количество цифр после запятой
            $x = -10;	                                                         // начальное значение аргумента
            $encounting = 20;	                                                 // количество вычисляемых значений
            $step = 2;	                                                         // шаг изменения аргумента
            $type = 'B';	                                                     // тип верстки
            if( $type == 'B' ) {	                                             // если тип верстки В
                echo '<ul>';                                                     // начинаем список
            }	
                for( $i = 0; $i < $encounting; $i++, $x += $step ) {                     // цикл с заданным количеством итераций
                    if( $x <= 10 ) {	                                             // если аргумент меньше или равен 10
                        $f = 7 * $x + 18;                                             // вычисляем функцию
                    }	                                       
                    else {	                                                        
                        if( $x < 20 )	{                                             // если аргумент меньше 20
                            if( $x == 16 ) {	                                     // если аргумент равен 22
                                $f = 'error';                                         // не вычисляем функцию
                            }
                            else {
                                $f = ($x - 17) / (8 - $x * 0.5);	                             // вычисляем функцию
                            }	
                        }
                        else {	                                                         	                                                
                            $f = ($x + 4) * ($x - 7);                         // вычисляем функцию
                        
                        }
                    }
                    if( $type == 'A' ) {	                                     // если тип верстки А
                        $f = (float)$f;
                        echo 'f('.$x.')='.round($f, $precison);	                 // выводим аргумент и значение функции
                        if( $i < $encounting-1 ) {                               // если это не последняя итерация цикла
                            echo '<br>';                                         // выводим знак перевода строки
                        }	
                    }
                    else {	                                                     
                        if( $type == 'B' ) {	                                 // если тип верстки В
                            $f = (float)$f;
                            echo '<li>f('. $x.')='.round($f, $precison).'</li>';                   // выводим данные как пункт списка
                        }
                    }
                    
                }
                if( $type == 'B' )	{                                                // если тип верстки В
                    echo '</ul>';	                                                 // закрываем тег списка
                }
            //}
        ?>
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
            <a class = "foot-date" href="#"><?php require "date_3lab.php" ?></a>
        </div>
    </div>
    </footer>  
</body>
</html>
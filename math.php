<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="math.css">
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
                        <a data-content="Вычисления" href="math.php">Вычисления</a>
                        <a data-content="Калькулятор" href="index_js.html">Калькулятор &#128425;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="elements">
            <div class="answers">
            <script>

                //Задача 1 - возведение в степень
                alert("Возведение в степень");
                let power_x = prompt("Введите x", "");
                let power_n = prompt("Введите n", "");
                function power(power_x, power_n) {
                    if (power_n == 1) {
                        return power_x;
                    }
                    if (power_n != 1) {
                        return (power_x * power(power_x, power_n - 1));
                    }
                }        
                let answer_1 = power(power_x, power_n);
                alert(`${power_x} в степени ${power_n} = ${answer_1}`);


                //Задача 2 - наибольший общий делитель
                alert("Наибольший общий делитель");
                let gcd_a = prompt("Введите a", "");
                let gcd_b = prompt("Введите b", "");
                function gcd(gcd_a, gcd_b) {
                    if(gcd_b == 0) {
                        return gcd_a;
                    } else {
                        return gcd(gcd_b, gcd_a % gcd_b);
                    }            
                }    
                answer_2 = gcd(gcd_a, gcd_b)
                alert(`НОД чисел ${gcd_a} и ${gcd_b} = ${answer_2}`);


                //Задача 3 - наименьшая цифра
                alert("Наименьшая цифра числа x");
                let min_x = prompt("Введите x", "");
                function minDigit (x){
                    let min_d = 9;
                    while (x > 0){
                        if ((x % 10) < min_d){
                            min_d = x % 10;
                        }
                        x = Math.floor(x/10);
                    }
                    return min_d;
                }
                let answer_3 = minDigit(min_x);
                alert(`Наименьшая цифра числа ${min_x} = ${answer_3}`);


                //Задача 4 - количество записей
                alert("Количество записей");
                let n_4 = prompt("Введите n", "");

                function pluralizeRecords_1(n, was){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if ((n != 11) && (n1 == 1)) {
                        return was[1];
                    }
                    return was[0];
                }
                answer_4_1 = pluralizeRecords_1(n_4, ['было найдено', 'была найдена']);

                function pluralizeRecords_2(n, records){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if (n > 10 && n < 20) { 
                        return records[2]; 
                    }
                    if (n1 > 1 && n1 < 5) { 
                        return records[1]; 
                    }
                    if (n1 == 1) {
                        return records[0]; 
                    }
                    
                    return records[2];
                    
                }
                answer_4_2 = pluralizeRecords_2(n_4, ['запись', 'записи', 'записей']);
                alert(`В результате выполнения запроса ${answer_4_1} ${n_4} ${answer_4_2}`);

        
            
                //Задача 5 - ряд Фибоначчи
                let error = "Ошибка";
                alert("n-ый элемент ряда Фибоначчи");
                let n_5 = prompt("Введите n", "");
                function fibb(n){
                    let last = 1, next = 1;
                    if (n <= 1000) {
                        for(let i = 1; i < n; i++){
                        let current = next;
                        next = last + next;
                        last = current;
                        }
                    } else {
                        return error;
                    }
                    return last;
                }
                answer_5 = fibb(n_5);
                alert(`Число Фибоначчи ${n_5}: ${answer_5}`);

            </script>
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


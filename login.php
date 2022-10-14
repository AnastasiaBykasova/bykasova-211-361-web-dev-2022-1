<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Login_page</title>
</head>
<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="nav">
                        <!--<a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>-->
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
        <div class="background-login">
            <div class="container-login-form">
            <form class="login_form" method="post" name="login_form">
                <h1>Log in</h1>
                <div class="elements-login">
                    <p>Login: <input type="text" name="log-name"placeholder="Enter login" size="18"/></p>
                    <p>Password: <input type="password" name="pass-name"placeholder="Enter password" size="18"/></p>
                    <p>Remember me <input type="checkbox"></p>
                    <p><div class="send-button"><input type="submit"></div></p>
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
            </div>
            <p class = "foot-date"><?php require "date.php" ?></p>
        </div>
    </footer>  
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="feedback_style.css">
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
                        <a data-content="Homepage" class="my-page" href="index.html">Homepage &#9749;</a>
                        <a data-content="Контакты" href="#">Контакты &#9734;</a>
                        <a data-content="Достижения" href="#">Достижения &#36;</a>
                        <a data-content="Log in" href="login.html">Log in &#10149;</a>
                        <a data-content="Feedback" href="feedback.html">Feedback &#8258;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="background-fb">
            <div class="container-fb-form">
            <form class="feedback_form" method="post" name="feedback_form">
                <h1 class="name-fb">Feedback</h1>
                <!--<p><a class="hp-back" href="index.html"><i>На главную</i> &#8617;</a></p>-->
                <div class="elements-fb">
                    <p>Фамилия: <input type="text" name="surname-input"placeholder="Введите фамилию" size="18"/></p>
                    <p>Имя: <input type="text" name="name-input"placeholder="Введите имя" size="18"/></p>
                    <p>Отчество: <input type="text" name="midname-input"placeholder="Введите отчество" size="18"/></p>
                    <p>Email: <input type="email" name="email-input"placeholder="Введите email" size="18"/></p>
                    <div class="from-where">
                        <p>Откуда узнали о нас? </p>
                        <p><input type="radio" name="type-input">В школе/в университете/на работе
                        <p><input type="radio" name="type-input">Из социальных сетей</p>
                        <p><input type="radio" name="type-input">От семьи/друзей/знакомых</p>
                        <p><input type="radio" name="type-input">Из рекламы</p>
                    </div>
                    <p>Тип обращения: 
                    <select id="letter-type">
                        <option value=”1”>Предложение</option>
                        <option value=”2”>Жалоба</option>                        
                    </select></p>
                    <div class="appeal-text">
                        <p>Текст сообщения: </p>
                        <textarea name="Tell us" rows="5" wrap="soft"></textarea>
                    </div>
                    <p>Вложения: <input type="file" name="file-input" multiple></p>
                    <p>Даю согласие на обработку персональных данных <input type="checkbox"/></p>
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
        </div>
    </footer>  
</body>
</html>
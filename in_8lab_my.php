<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats facts</title>
    <link rel="stylesheet" href="styles/in_8lab.css">
    <script src="js_files/in_8lab.js" defer></script>
</head>
<body>
    <header class="header">
        <div class="header-line">
            <div class="nav_nav">
                <a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>
                <a data-content="Achievements" href="achievements.php">Achievements &#36;</a>
                <a data-content="Log in" href="login.php">Log in &#10149;</a>
                <a data-content="Feedback" href="feedback.php">Feedback &#8258;</a>
                <a data-content="Math-functions" href="math_6lab.php">Math-functions &#9731;</a>
                <a data-content="Калькулятор" href="in_7lab.html">Калькулятор &infin;</a>
                <a data-content="Cats facts" id="cats_facts" href="in_8lab.php">Cats facts &#10048;</a>
                <a data-content="PHP functions" href="in_9lab.php">PHP functions &#10149;</a>
                <a data-content="Text analysis" href="in_10lab.php">Text analysis</a>
            </div>
        </div>
        <nav>
            <img class="logo" src="pictures/cat_white.png">
            <div class="title">Facts about cats</div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="search-form">
                <input type="text" class="search-field" id="search-field">
                <button class="search-btn">Найти</button>
            </div>
            <div class="pagination-info">
                <span>Показывать по 
                    <select name="per-page" class="per-page-btn">
                        <option>5</option>
                        <option selected>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                        <option>200</option>
                    </select> записей на странице</span>
                <span class="current-interval-info">Показаны записи с 
                    <span class="current-interval-start">1</span> по 
                    <span class="current-interval-end">10</span> из 
                    <span class="total-count">190</span></span>
            </div>
            <div class="facts-list" data-url="http://cat-facts-api.std-900.ist.mospolytech.ru/facts">
                <div class="facts-list-item">
                    <div class="item-content">Scottish sailer Alexander Selkirk once survived for 4 years on a deserted island thanks to feral cats that protected him from large rats during the night.</div>
                    <div class="item-footer">
                        <div class="author-name">Alex Wohlbruck</div>
                        <div class="upvotes">4</div>
                    </div>
                </div>
            </div>
            <div class="pagination">
                <!--
                <button class="btn first-page-btn" data-page="1">Первая страница</button>
                <div class="pages-btn">
                    <button class="btn active" data-page="1">1</button>
                    <button class="btn" data-page="2">2</button>
                    <button class="btn" data-page="3">3</button>
                </div>
                <button class="btn last-page-btn">Последняя страница</button> 
                -->
            </div>
        </div>
    </main>
</body>
</html>




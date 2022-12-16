<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/in_7lab.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <script src="js_files/in_7lab.js" defer></script>
    <title>Калькулятор</title>
</head>
<body>
<header> 
    <div class="container">
        <div class="header-line">
            <div class="nav">
                <a data-content="Homepage" class="my-page" href="index.php">Homepage &#9749;</a>
                <a data-content="Achievements" href="achievements.php">Achievements &#36;</a>
                <a data-content="Log in" href="login.php">Log in &#10149;</a>
                <a data-content="Feedback" href="feedback.php">Feedback &#8258;</a>
                <a data-content="Math-functions" href="math_6lab.php">Math-functions &#9731;</a>
                <a data-content="Калькулятор" id="calc_7lab" href="in_7lab.php">Калькулятор &infin;</a>
                <a data-content="Cats facts" href="in_8lab.php">Cats facts &#10048;</a>
                <a data-content="PHP functions" href="in_9lab.php">PHP functions &#10149;</a>
                <a data-content="Text analysis" href="in_10lab.php">Text analysis</a>
                <a data-content="Multiplication table" id="multti" href="in_11lab.php">Multiplication table</a>
            </div>
        </div>
    </div>
    </header>
	<main>	
	<div class="elements">
        <div class="calc-pic">
            <img src="pictures/calc_2.jpg" height="536px">
        </div>
        <h6>calculator</h6>
        <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
                <textarea id="out_screen" rows="5" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
                <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                    <button class="key_digit" id="d_1" value="1">1</button>
                    <button class="key_digit" id="d_2" value="2">2</button>
                    <button class="key_digit" id="d_3" value="3">3</button>
                    <button class="key_digit" id="d_4" value="4">4</button>
                    <button class="key_digit" id="d_5" value="5">5</button>
                    <button class="key_digit" id="d_6" value="6">6</button>
                    <button class="key_digit" id="d_7" value="7">7</button>
                    <button class="key_digit" id="d_8" value="8">8</button>
                    <button class="key_digit" id="d_9" value="9">9</button>
                    <button class="key_digit" id="d_c" value=".">.</button>
                    <button class="key_digit" id="d_0" value="0">0</button>
                    <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                </div>
                <div class="other" id="other" >
                    <button class="key_operation" id="o_a" value="+">+</button>
                    <button class="key_clear_1" id="b_c_all" value="C">C</button>
                    <button class="key_bracket" id="b_l" value="(">(</button>
                    <button class="key_bracket" id="b_r" value=")">)</button>
                    <button class="key_operation" id="o_d" value="/">/</button>
                    <button class="key_operation" id="o_m" value="*">*</button>
                    <button class="key_operation" id="o_s" value="-">-</button>
                    <button class="key_result" id="bt_r" value="=">=</button>
                    <button class="key_clear_2" id="b_c_one" value="CE">CE</button>
                </div>
            </div>
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

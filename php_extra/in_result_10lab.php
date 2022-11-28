<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="in_10lab_result.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <title>Login_page</title>
</head>
<body>


<?php

if( isset($_POST['my_text']) && $_POST['my_text']) {                                            // если передан текст для анализа
    echo '<p><b>Вы ввели следующий текст. </b><br><div class="text-itself">'.$_POST['my_text'].'</div></p>'; // выводим текст
    test_it($_POST['my_text']); // анализируем текст
}
else {                                                                                           // если текста нет или он пустой
    echo '<div class="src_error">Нет текста для анализа</div>';                                  // выводим ошибку
}

//test_it(iconv("utf-8", "cp1251",$_POST['my_text']));                                              // перед анализом перекодируем текст из UTF-8 в СР1251 
function test_it($text) {
    // количество символов в тексте определяется функцией размера текста
    echo 'Количество символов: '.iconv_strlen($text).'<br>';
    // определяем ассоциированный массив с цифрами
    $cifra=array('0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
    '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true);   
    // вводим переменные для хранения информации о:
    $cifra_amount=0;                                                                             // количество цифр в тексте
    $word_amount=0;                                                                              // количество слов в тексте
    $word='';                                                                                    // текущее слово
    $words=array();                                                                              // список всех слов
    for($i=0; $i<strlen($text); $i++) {                                                          // перебираем все символы текста
        if(array_key_exists($text[$i], $cifra)) {                                               // если встретилась цифра
            $cifra_amount++;                                                                     // увеличиваем счетчик цифр
        }
        if($text[$i]==' ' || $i==strlen($text)-1) {                                            // если в тексте встретился пробел или текст закончился
            if($word) {                                                                        // если есть текущее слово
                if(isset($words[$word])) {                                                      // если текущее слово сохранено в списке слов
                    $words[$word]++;                                                           // увеличиваем число его повторов
                }
                else {
                    $words[$word]=1;                                                           // первый повтор слова
                }
            }
            $word='';                                                                            // сбрасываем текущее слово
        }
        else {                                                                                   // если слово продолжается
            $word.=$text[$i];                                                                    //добавляем в текущее слово новый символ
        }
    }
    //echo iconv("cp1251", "utf-8", $words[$word]);                                                 // непосредственно перед выводом перекодируем строку обратно в UTF-8
    echo 'Количество цифр: '.$cifra_amount.'<br>';                                               // выводим количество цифр в тексте
    echo 'Количество слов: '.count($words).'<br>';                                 // выводим количество слов в тексте
} 

function test_symbs($text) {
    $symbs=array();                                                                                  // массив символов текста
    $l_text=strtolower($text);                                                                     // переводим текст в нижний регистр
    // последовательно перебираем все символы текста
    for($i=0; $i<strlen($l_text); $i++)
    {
        if( isset($symbs[$l_text[$i]]) ) {                                                                // если символ есть в массиве
            $symbs[$l_text[$i]]++;                                                                           // увеличиваем счетчик повторов
        }
        else {
            $symbs[$l_text[$i]]=1; // добавляем символ в массив
        }
    }
    return $symbs; // возвращаем массив с числом вхождений символов в тексте
} 

















?>






</body>
</html>
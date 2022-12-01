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
$text = $_POST['my_text'];
if( isset($text) && $text) {                                          // если передан текст для анализа
    echo '<p><b>Вы ввели следующий текст. </b><br><div class="text-itself">'.$text.'</div></p>'; // выводим текст
    test_it($text);  // анализируем текст
}
else {                                                                                           // если текста нет или он пустой
    echo '<div class="src_error">Нет текста для анализа</div>';                                  // выводим ошибку
}


/*
for($x=0; $x<strlen($text); $x++) {
    if (($text[$x] != "") || ($text[$x] != " ")) {
        test_it(iconv("utf-8", "cp1251", $text[$x]));
    }
}*/
//test_it(iconv("utf-8", "cp1251", $text));                                            // перед анализом перекодируем текст из UTF-8 в СР1251 



function test_it($text) {
    $kol = test_symbs($text);
    
    // количество символов в тексте определяется функцией размера текста
    echo 'Количество символов: '.iconv_strlen($text).'<br>';
    // определяем ассоциированный массив с цифрами
    $cifra = array('0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true, '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true);   
    // определяем ассоциированный массив со знаками препинания
    $punct_mark = array('.'=>true, ','=>true, '<'=>true, '>'=>true, '/'=>true, '?'=>true, '('=>true, ')'=>true, '['=>true, ']'=>true, '{'=>true, '}'=>true, "|"=>true, "!"=>true, "-"=>true);
    $letter_upper_rus = array('А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 
        'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я');
    $letter_lower_rus = array('а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 
        'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я');
    $letter_upper_eng = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $letter_lower_eng = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    // вводим переменные для хранения информации о:
    $cifra_amount = 0;                                                                             // количество цифр в тексте
    $word_amount = 0;                                                                              // количество слов в тексте
    $word = '';                                                                                    // текущее слово
    $words=array();                                                                              // список всех слов
    $letter_amount = 0;
    $letter_upper = 0;
    $letter_lower = 0;
    $punct_amount = 0;
    for($i=0; $i<strlen($text); $i++) {                                                          // перебираем все символы текста
        if(array_key_exists($text[$i], $cifra)) {                                               // если встретилась цифра
            $cifra_amount++;                                                                     // увеличиваем счетчик цифр
        }
        if(array_key_exists($text[$i], $punct_mark)) {                                             
            $punct_amount++;                                                                    
        }
        /*
        if (array_key_exists($text[$i], $letter_upper_eng)) {
            $letter_upper++;
        }
        if (array_key_exists($text[$i], $letter_lower_eng)) {
            $letter_lower++;
        }
        if (array_key_exists($text[$i], $letter_upper_rus)) {
            $letter_upper++;
        }
        if (array_key_exists($text[$i], $letter_lower_rus)) {
            $letter_lower++;
        }
        $letter_amount++;
        */
        
        
        else if(ctype_alpha($text[$i])) {
            if(ctype_upper($text[$i]) || (array_key_exists($text[$i], $letter_upper_rus))) {
                $letter_upper++;
            }
            else if (ctype_lower($text[$i]) || (array_key_exists($text[$i], $letter_lower_rus))) {
                $letter_lower++;
            }
            $letter_amount++;
        }
        




        //$capitalsAmount = mb_strlen( preg_replace('/[^A-ZА-ЯЁ]/u', '', $text), 'UTF-8');
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
    //echo iconv("cp1251", "utf-8", $words[$word]);                     // непосредственно перед выводом перекодируем строку обратно в UTF-8
    //echo iconv("cp1251", "utf-8", $text);
    echo 'Количество цифр: '.$cifra_amount.'<br>';                                               // выводим количество цифр в тексте
    echo 'Количество слов: '.count($words).'<br>';                                 // выводим количество слов в тексте
    echo 'Количество знаков препинания: '.$punct_amount.'<br>'; 
    echo 'Количество букв: '.$letter_amount.'<br>';
    echo 'Количество заглавных букв: '.$letter_upper.'<br>';
    echo 'Количество строчных букв: '.$letter_lower.'<br>';

    echo implode("\r\n", $kol);

    $with_rus = iconv("cp1251", "utf-8", $text);
    for($i=0; $i<strlen($with_rus); $i++) {
        if(isset($kol_symbs[$with_rus[$i]])) {                                                                // если символ есть в массиве
            $kol_symbs[$with_rus[$i]]++;                                                                           // увеличиваем счетчик повторов
        }
        
    }

    //echo '<br>';
    //foreach ($kol as $row) {
    //    echo $row . " \r\n";
    //}
    //echo "Количество вхождений: ".$kol;
} 
//echo iconv("cp1251", "utf-8", $words[$word]);    





function test_symbs($text) {
    $symbs = array();                                                                                  // массив символов текста
    $l_text = strtolower($text);                                                                     // переводим текст в нижний регистр
    // последовательно перебираем все символы текста
    for($i=0; $i<strlen($l_text); $i++) {
        if(isset($kol_symbs[$l_text[$i]])) {                                                                // если символ есть в массиве
            $kol_symbs[$l_text[$i]]++;                                                                           // увеличиваем счетчик повторов
        }
        else {
            $kol_symbs[$l_text[$i]]=1; // добавляем символ в массив
        }
    }
    //$result = array_combine($symbs, $kol_symbs);
    //echo iconv("cp1251", "utf-8", $text);
    //$result = $symbs + $kol_symbs;
    //return $result;
    return $kol_symbs; // возвращаем массив с числом вхождений символов в тексте
}






/*
test_symbs(iconv("utf-8", "cp1251", $text)); 
function test_symbs($text) {
    //$with_rus = iconv("cp1251", "utf-8", $text);
    $kol_symbs = array();                                                                                  // массив символов текста
    $l_text = strtolower($text);                                                                     // переводим текст в нижний регистр
    $symbs = array();
    // последовательно перебираем все символы текста
    for($i=0; $i<strlen($l_text); $i++) {
        if(isset($kol_symbs[$l_text[$i]])) {                                                                // если символ есть в массиве
            $kol_symbs[$l_text[$i]]++;                                                                           // увеличиваем счетчик повторов
        }
        else {
            $kol_symbs[$l_text[$i]]=1; // добавляем символ в массив
            $symbs[$i] = $l_text[$i];
        }
    }
    //$result = array_combine($symbs, $kol_symbs);
    echo iconv("cp1251", "utf-8", $text);
    $result = $symbs + $kol_symbs;
    return $result;
    //return $kol_symbs; // возвращаем массив с числом вхождений символов в тексте
}
*/






/*
function test_symbs($text) {
    $kol_symbs = array();                                                                                  // массив символов текста
    $l_text = strtolower($text);                                                                     // переводим текст в нижний регистр
    $symbs = array();
    // последовательно перебираем все символы текста
    for($i=0; $i<strlen($l_text); $i++) {
        if(isset($kol_symbs[$l_text[$i]])) {                                                                // если символ есть в массиве
            $kol_symbs[$l_text[$i]]++;                                                                           // увеличиваем счетчик повторов
        }
        else {
            $kol_symbs[$l_text[$i]]=1; // добавляем символ в массив
            $symbs[$i] = $l_text[$i];
        }
    }
    //$result = array_combine($symbs, $kol_symbs);
    //echo iconv("cp1251", "utf-8", $text);
    $result = $symbs + $kol_symbs;
    return $result;
    //return $kol_symbs; // возвращаем массив с числом вхождений символов в тексте
}
*/ 
















?>






</body>
</html>
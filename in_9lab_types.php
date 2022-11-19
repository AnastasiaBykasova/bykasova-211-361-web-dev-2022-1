<?php

$precison = 3;
$x = -10;
$encounting = 20;
$step = 2;
$type = 'D';

if ($type == 'A') {
    echo '';
}
if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}

else if ($type == 'D') {
    echo '<table border="1px">'."\n<br>";
    echo '<tr>'."\n<br>";
}



for( $i=0; $i < $encounting; $i++, $x+=$step ) {
    if ($x <= 10) {
        $f = 7 * $x + 18;
    }
    else {
        if ($x == 16) {
            $f = 'error';
        }
        else if ($x < 20) {
            $f = ($x - 17) / (8 - $x * 0.5);
        }
        else {
            $f = ($x + 4) * ($x - 7);
        }
    }
    switch ($type) {
        
        case 'A':
            if ($f != "error") {
                $f = (float)$f;
                echo 'f('.$x.')='.round($f, $precison);	                 
            }
            else {
                echo 'f('.$x.')='.$f;
            }            
            if($i < $encounting-1) {                               
                echo '<br>';                                         
            }
            break;
        case 'B':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                 
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;
        case 'C':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';	                   
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;

        case 'D':
            for ($i = 1; $i <= $encounting; $i++, $x+=$step) {
                if ($f != "error") {
                    $f = (float)$f;
                    echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.round($f, $precison).'</td>'.'</tr>';                 
                }
                else {
                    echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.$f.'</td>'.'</tr>';
                }         
            }

            break;
            
        case 'E':           
            if ($f != "error") {
                $f = (float)$f;
                echo '<div class="type_e">f('.$x.')='.round($f, $precison).'</div>';
            }
            else {
                echo '<div class="type_e">f('.$x.')='.$f.'</div>';
            }    
            break;  
           
    }                
}

if ($type == 'B') {
    echo '</ul>';
}
if ($type == 'C') {
    echo '</ol>';
}
if ($type == 'D') {
    echo '</tbody></table>';
}
if ($type == 'D') {
    echo '</table>';
}
     
?>






































<?php
    /*
    $min_value=10;	// минимальное значение, останавливающее вычисления
    $max_value=20;	// максимальное значение, останавливающее вычисления
    $precison = 3;  // точность округления, количество цифр после запятой
    $encounting = 1000;
        
    // цикл с заданным количеством итераций
    for( $i=0; $i < $encounting; $i++, $x+=$step ) {
        $x = -10;	                                                         // начальное значение аргумента
        $encounting = 20;	                                                 // количество вычисляемых значений
        $step = 2;	                                                         // шаг изменения аргумента
        $type = 'C';	                                                     // тип верстки
        if( $type == 'B' ) {	                                             // если тип верстки В
            echo '<ul>';                                                     // начинаем список
        }	
        for( $i=0; $i < $encounting; $i++, $x+=$step ) {                     // цикл с заданным количеством итераций
            if( $x <= 10 ) {	                                             // если аргумент меньше или равен 10
                $f = 32*$x / 21;                                             // вычисляем функцию
            }	                                       
            else {	                                                        
                if ($x < 20) {	                                             // если аргумент меньше 20
                    $f = $x*$x/3 + 7/($x-4);	                             // вычисляем функцию
                }
                else {	                                                     
                    if( $x == 22 ) {	                                     // если аргумент равен 22
                        $f= "error";                                         // не вычисляем функцию
                    }	
                    else {	                                                
                        $f = ( 1 / ($x-22) )*2 + $x;                         // вычисляем функцию
                    }	
                }
                if( $type == 'A' ) {	                                     // если тип верстки А
                    if ($f != "error") {
                        $f = (float)$f;
                        echo 'f('.$x.')='.round($f, $precison);	                 // выводим аргумент и значение функции    
                    }
                    else {
                        echo 'f('.$x.')='.$f;
                    }            
                    if( $i < $encounting-1 ) {                               // если это не последняя итерация цикла
                        echo '<br>';                                         // выводим знак перевода строки
                    }	
                }
                else {	                                                     
                    if( $type == 'B' ) {	                                 // если тип верстки В
                        $f = (float)$f;
                        echo '<ul><li>f('. $x.')='.round($f, $precison).'</li><ul>';                   // выводим данные как пункт списка
                    }
                }
            }
        }    
        if( $type == 'B' )	{                                                // если тип верстки В
            echo '</ul>';	                                                 // закрываем тег списка
        }
    }
    */
?>
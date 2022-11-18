<?php


echo "hcfsdu";
$string = 21;
$column = 4;

echo '<table>'."\n<br>";
$f = 12;
$x = 9;
$fl = 1;
for ($i1=0; $i1 < $string; $i1++) {
    echo '<tr>'."\n<br>";
    echo '<td></td>'."\n<br>";
    for ($i=1; $i < $column; $i++) {
        //echo '<td> </td>'."\n<br>";

        
                        
    
        if ($f != "error") {
            $f = (float)$f;
            echo '<tr><td>'.$fl.'</td><td>argument='.$x.'</td><td>f('.$x.')='.round($f, $column).'</td></tr>';
            $fl += 1;   
        }
        else {
            echo '<tr><td>'.$fl.'</td><td>argument='.$x.'</td><td>f('.$x.')='.$f.'</td></tr>';
            $fl += 1;   
        }
                            
                        

    }
    echo '</tr>'."\n<br>";
}
echo '</table>';



?>
<?php


$x = 0;

while($x < 10) {

    echo "o x é $x <br>";
    if($x === 5) {
        echo "terminamos o loop <br>";
        break;
    }
    
    $x ++;

}

echo " Saiu do Loop <br>";

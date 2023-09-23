<?php

$x = 4;

while($x < 30) {

    echo "o x é $x <br>";
    if($x === 24) {
        echo "terminamos o loop <br>";
        break;
    }
    
    $x += 2;

}

echo " Saiu do Loop <br>";

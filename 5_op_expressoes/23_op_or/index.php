<?php

if (5 > 2 || 3 < 4){ // true e true
    echo "Operação 1 é verdadeira <br>";
}

if (5 > 2 || 30 < 4){ // true e false
    echo "Operação 2 é verdadeira <br>";
}

if (5 > 20 || 3 < 4){ // false e true
    echo "Operação 3 é verdadeira <br>";
}

if (5 > 20 || 30 < 4){ // false e false
    echo "Operação 4 é verdadeira <br>";
}

$a = 10;
$b = 20;
$c = 30;
$d = 40;

if($a > $b || $d > $c){ // false e true
    echo "Operação 5 é verdadeira <br>";
}

if(($a > $b || $d > $c) && $c < $d){ // or com and
    echo "Operação 6 é verdadeira <br>";
}

if(($a > $b && $d > $c) || $c < $d){ 
    echo "Operação 7 é verdadeira <br>";
}


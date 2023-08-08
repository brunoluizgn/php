<?php
$a = 10;
$b = 5;
$c = 12;
$d = 12;
$e = 7;

if(5 > 10 && 10 < 5){ // false e true
    echo "Entrou no IF 1 <br>";
}    

if(50 > 10 && 4 < 5){ // true e true
    echo "Entrou no IF 2 <br>";
}   

if(50 > 10 && 10 < 9){ // true e false
    echo "Entrou no IF 3 <br>";
}   

if(50 > 100 && 10 < 500){ // false e false
    echo "Entrou no IF 4 <br>";
}   


if($a > $b && $c >= $d){ 
    echo "Entrou no IF 5 <br>";
}    


if($b <= $a && $c == $d){ 
    echo "Entrou no IF 6 <br>";
}    


if(($a > $b && $c >= $d) && $c >= $d) {
    echo "Entrou no IF 7 <br>";
} 
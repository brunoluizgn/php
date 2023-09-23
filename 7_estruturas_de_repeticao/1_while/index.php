<?php

// definição do contador 
$x = 0;

// Inicio / definição da estrutura
while($x < 10) {

    // corpo do loop
    echo $x . "<br>";

    // Incrmento do contador
    $x = $x + 1;

}

echo "aumentando + 2 <br>";


$y = 0;

// Inicio / definição da estrutura
while($y <= 10) {
    
    // corpo do loop
    echo $y . "<br>";

    // Incrmento do contador
    $y = $y + 2;

}


echo "decrementando o valor <br>";

$z = 10;

// Inicio / definição da estrutura
while($z > 0) {
    
    // corpo do loop
    echo $z . "<br>";

    // Incrmento do contador
    $z --;

}

echo "Continuando o código só numero impar <br>";

$a= 10;

// Inicio / definição da estrutura
while($a > 0) {
    
    // corpo do loop
    if($a % 2 != 0) {
        echo $a . "<br>";
    }

    // Incrmento do contador
    $a --;

}

echo "Continuando o código <br>";
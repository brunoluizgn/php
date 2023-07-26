<?php

//  is_int(5)

 if(is_int(5)){ // true
    echo "É um inteiro<br>";
 }

 if(is_int("não é um inteiro")){ //false
    echo "É um inteiro";
 }

$A = 5;

if(is_int($A)){ // true
    echo "É uma variável inteira";
 }
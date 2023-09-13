<?php

$velocidade = 60;
$max = 40;

if($velocidade < $max) {

    echo " Parabéns você esta em uma velocidade segura <br>";

}

if($velocidade < $max) {

    echo " Parabéns você esta em uma velocidade segura <br>";
    
} elseif($velocidade == $max) {

    echo "Cuidado você esta no limite de velocidade <br>";

} else {

    echo " Você foi Multado, velocidade acima do permitido! <br>";

}
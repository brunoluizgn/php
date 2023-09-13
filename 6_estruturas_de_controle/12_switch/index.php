<?php

$x = 2;

switch ($x) {

    case 0:
        echo "X é igual a zero <br>";
        break;
    case 1:
        echo " X é igual a 1 <br>";  
        break;
        default:
        echo " X não é igual a nenhum dos valores mencionados <br>";        
}

// outro exemplo

$y = "bruno";

switch ($y) {

    case "bruno":
        echo "O nome é bruno <br>";
        break;
    case "João":
        echo "O nome é João <br>";  
        break;
        default:
        echo "Nenhum nome encontrado <br>";        
}
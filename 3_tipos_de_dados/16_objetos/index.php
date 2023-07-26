<?php

class Pessoa {

   function falar() {
        echo "Olá pessoal!";
    }

}

$bruno = new Pessoa();
$bruno->nome = "Bruno Luiz";
echo $bruno->nome;
echo "<br>";


<?php

function nomeIdade($nome, $idade) {

    if(is_int($idade)){

        echo "Olá eu sou o $nome, tenho $idade anos. <br>";

    } else {

        echo "Por favor, digite um número inteiro <br>";

    }
}

nomeIdade("Bruno", 34);

<?php

$num = 50;
$numm = 10;
$str = "teste";

if(is_int ($num) || is_flot($numm)){

    $multi1 = $num * 2;

    if($multi1 >= 100) {

    echo "100 é um inteiro if local";

    } else {

        echo "É inteiro mas, é menor que 100 <br>";

    }

} else {

    echo "Não é um número <br>";

}

echo"<br>";

if(is_int ($num) || is_flot($numm)){

    $multi1 = $numm * 2;

    if($multi1 > 100) {

    echo "100 é um inteiro if local";

    } else {

        echo "É inteiro mas, menor que 100 <br>";

    }

} else {

    echo "Não é um número <br>";

}

echo"<br>";


if(is_int($str) || is_float($str)){

    $multi1 = $numm * 2;

    if($multi1 > 100) {

    echo "100 é um inteiro if local";

    } else {

        echo "É inteiro mas, menor que 100 <br>";

    }

} else {

    echo "Não é um número <br>";

}

echo"<br>";

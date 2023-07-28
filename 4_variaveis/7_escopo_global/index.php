<?php

$teste = "abc";
echo "$teste  global 1 <b>";

if (5 > 2){
    $teste = "cba";
    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao(){
    $teste = "huahuahu";
    echo "$teste Local <br>";
}

funcao();

function testandoGlobal(){
   global $teste;
   $teste = "mudei o valor";

   echo "$teste Global função <br>";
}

testandoGlobal();

echo "$teste global 3 <br>";


<?php

$pessoa = [
'nome' => 'Bruno',
'Idade' =>  34,
'Profissão' => 'Programador',
'Graduação' => 'Redes de Computadores'
];

print $pessoa['Profissão']; // teste do array
echo "<br>";

//DESAFIO

$maioridade = 18;
if($pessoa['Idade'] >= $maioridade){
    echo" A pessoa é maior de idade";
}

<?php

$carro = [
    'marca' => 'BMW',
    'rodas' => 4,
    'blindado' => false,
    'teto solar' => true,
    'Velocidade máxima' => 300
];

print_r($carro);
echo"<br>";
$marca = $carro['marca'];
$velocidade = $carro['Velocidade máxima'];
echo" A marca é $marca e atinge a velocidade $velocidade km/h";



<?php

function velocidadeMaxima($vel) {

    if(is_int($vel)){

        echo "O carro atinge a velocidade máxima de $vel km/h <br>";

    } else {

        echo "Por favor, passe um número inteiro <br>";

    }
}

velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

// não pode executar uma função que tem parametro vazio

velocidadeMaxima("teste");

function descreverAnimal($nome, $raca) {

    echo "O $nome é da raça $raca <br>";

}

descreverAnimal("Bob", "Viralata");


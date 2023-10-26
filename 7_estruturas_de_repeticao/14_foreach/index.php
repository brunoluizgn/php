<?php


// foreach é atrelado a um array já existente

$nomes = ["Bruno", "Luiz", "Felipe","Brenda"];

foreach($nomes as $nomes){

    echo "O nome do indice atual é $nomes <br>";
    if($nomes == "Bruno") {
        echo "opa <br>";
    }
}
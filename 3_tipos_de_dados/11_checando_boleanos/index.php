<?php

$a = true;

if(is_bool($a)){
    echo "é verdadeiro <br>";
}


if(is_bool(0)){
    echo "false <br>";
}


if(is_bool(false)){
    echo "false é bool <br>";
}

if(0==false){
    echo "Zero é considerado falso <br>";
}
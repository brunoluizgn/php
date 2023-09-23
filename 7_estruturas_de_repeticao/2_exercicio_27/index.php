<?php
$arr = [5, "bruno", true, false, "opa", 12.8, "teste", true, [], "palavra", 5, 10, "Alô"];

$x = count($arr);
$y = 0;

while($y < $x) {
    if(is_string($arr[$y])) {
        echo $arr[$y] . "<br>";
    }
    $y ++;
}
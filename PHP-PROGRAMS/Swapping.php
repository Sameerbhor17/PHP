<?php

$a = 20;
$b = 50;

echo "Numbers before swapping a=$a and b=$b";

function swap($a, $b) {
    //addition and substraction
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "Numbers after swapping a=$a and b=$b";
}

swap(20, 50);
?>
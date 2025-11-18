<?php

$a = 20;
$b = 50;

echo "<b>Numbers before swapping a=$a and b=$b</b> <br/>";

function swap($a, $b) {
    //addition and substraction
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;

    echo "<b>Numbers after swapping a=$a and b=$b</b>";
}

swap(20, 50);
?>
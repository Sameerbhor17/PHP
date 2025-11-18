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

function swapping($num1, $num2) {
    //Multiplication and division
    $num1 = $num1 * $num2;
    $num2 = $num1 / $num2;
    $num1 = $num1 / $num2;

    echo "<b>Numbers after swapping num1=$num1 and num2=$num2</b>";
}

swap($a, $b);

echo "<br/><br/><hr/><br/>";
$num1 = 100;
$num2 = 200;
echo "<b>Numbers before swapping num1=$num1 and num2=$num2</b><br/>";
swapping($num1, $num2);
?>
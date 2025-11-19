<?php

$n = 5;

echo "<b>Star Triangle Pattern</b> <br/>";
for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<b>Rotated Star Triangle Pattern</b> <br/>";
for($i = $n; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}
?>
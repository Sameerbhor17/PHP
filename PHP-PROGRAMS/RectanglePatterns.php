<?php 

    $n = 5;

    //Rectangle Pattern
    echo "<b>Solid Rectangle Pattern</b>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    //Hollow Rectangle Pattern
    echo "<b>Hollow Rectangle Pattern</b>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n; $j++) {
            if($i === 1 || $j === 1 || $i === $n || $j === $n) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    //Rhombus Pattern
    echo "<b>Solid Rhombus Pattern</b>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for($j = 1; $j <= $n; $j++) {
            echo "*";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<br/>";

    //Hollow Rhombus Pattern
    echo "<b>Hollow Rhombus Pattern</b>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }

        for($j = 1; $j <= $n; $j++) {
            if($i === 1 || $j === 1 || $i === $n || $j === $n) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br/>";
    }
?>
<?php 

    $n = 5;

    //Rectangle Pattern
    echo "<b>Rectangle Pattern</b>";
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
?>
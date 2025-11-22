<?php 

    $n = 5;

    //Palindrome Pattern
    echo "<b>Palindrome Pattern<b><br/>";
    echo "<br/>";

    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= ($n - $i); $j++) {
            echo "&nbsp;&nbsp;";
        }

        for($j = $i; $j >= 1; $j--) {
            echo "$j";
        }

        for($j = 2; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br/>";
    }

?>
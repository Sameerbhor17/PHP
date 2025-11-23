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

    //Number Triangle
    echo "<br/>";
    echo "<b>ith Number Triangle</b><br/>";
    echo "<br/>";

    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$i";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<b>jth Number Triangle</b><br/>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$j";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "Number Increment Triangle";
    echo "<br/>";
    $num = 1;
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$num &nbsp;&nbsp;";
            $num++;
        }
        echo "<br/>";
    }
?>
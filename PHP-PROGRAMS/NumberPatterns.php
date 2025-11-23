<?php 

    $n = 5;

    //Palindrome Pyramid Pattern
    echo "<b>Palindrome Pyramid Pattern<b><br/>";
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

    //Number Pyramid
    echo "<br/>";
    echo "<b>ith Number Pyramid</b><br/>";
    echo "<br/>";

    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= ($n - $i); $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 1; $j <= $i; $j++) {
            echo "$i &nbsp;&nbsp;";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "<b>jth Number Pyramid</b><br/>";
    echo "<br/>";
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= ($n - $i); $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 1; $j <= $i; $j++) {
            echo "$j &nbsp;&nbsp;";
        }
        echo "<br/>";
    }

    echo "<br/>";
    echo "Number Increment Pyramid";
    echo "<br/>";
    $num = 1;
    for($i = 1; $i <= $n; $i++) {
        for($j = 1; $j <= ($n - $i); $j++) {
            echo "&nbsp;&nbsp;";
        }
        for($j = 1; $j <= $i; $j++) {
            echo "$num &nbsp;&nbsp;";
            $num++;
        }
        echo "<br/>";
    }
?>
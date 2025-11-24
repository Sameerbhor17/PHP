<?php

    $arr = [9, 5, 1, 8, 2, 7, 3, 6, 4];

    echo "<b>Array Before Sorting: </b><br/>";
    echo "<br/>";

    printArr($arr);

    echo "<br/>";
    echo "<b>Array After Sorting Using Selection Sort: </b><br/>";
    echo "<br/>";
    selectionSort($arr);
    printArr($arr);

    function selectionSort($arr) {
        for($i = 0; $i < count($arr); $i++) {
            $smallest = $i;
            for($j = $i+1; $j <= count($arr); $j++) {
                if($arr[$j] < $arr[$smallest]) {
                    $smallest = $j;
                }
            }

            //swapp
            $arr[$smallest] = $arr[$i];
            $arr[$i] = $arr[$i+1];
            $arr[$i+1] = $arr[$smallest];
        }
    }

    function printArr($arr) {
        foreach($arr as $element) {
            echo "$element &nbsp;";
        }
    }

?>
<?php

$arr = [4, 8, 1, 5, 2, 6, 3, 9, 7, 0];
echo "<b> Array Elements before Sorting: </b> <br/>";
printArr($arr);

for($i = 0; $i < count($arr)-1; $i++) {
    for($j = 0; $j < count($arr)-$i-1; $j++) {
        if($arr[$j] > $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

print("<br/><br/>");
echo "<b> Array Elements After Sorting using Bubble Sort: </b> <br/>";
printArr($arr);

function printArr($array) {
    foreach($array as $el) {
        echo $el." ";
    }
}

?>
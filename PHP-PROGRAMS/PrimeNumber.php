<?php

//Write a code to check if a number is prime or not

$number = 11;
$isPrime = false;

for($i=2; $i<=($number/2); $i++) {
    if(($number/i) === 0) {
        echo "$number is not a prime number";
        break;
    } else {
        $isPrime = true;
    }
}

if($isPrime) {
    echo "$number is a Prime Number";
}

?>
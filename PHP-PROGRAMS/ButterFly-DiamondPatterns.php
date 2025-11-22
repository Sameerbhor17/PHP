<?php

  $n = 5;

  //Butterfly Pattern
  echo "<b>Butter Fly Pattern</b><br/>";
  echo "<br/>";

  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }

    $spaces = 2*($n-$i);
    for($j = 1; $j <= $spaces; $j++) {
      echo "&nbsp;&nbsp;";
    }

    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "<br/>";
  }

  for($i = $n; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }

    $spaces = 2*($n-$i);
    for($j = 1; $j <= $spaces; $j++) {
      echo "&nbsp;&nbsp;";
    }

    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "<br/>";
  }

?>
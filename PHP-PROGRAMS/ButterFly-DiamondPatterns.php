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

  //Diamond Pattern
  echo "<br/>";
  echo "<b>Diamond Pattern</b><br/>";
  echo "<br/>";

  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= ($n - $i); $j++) {
      echo "&nbsp;&nbsp;";
    }

    $stars = 2*$i-1;
    for($j = 1; $j <= $stars; $j++) {
      echo "*";
    }
    echo "<br/>";
  }

  for($i = $n; $i >= 1; $i--) {
    for($j = 1; $j <= ($n - $i); $j++) {
      echo "&nbsp;&nbsp;";
    }

    $stars = 2*$i-1;
    for($j = 1; $j <= $stars; $j++) {
      echo "*";
    }
    echo "<br/>";
  }

  //Hollow ButterFly Pattern
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      if($j == 1 || $j == $i) {
        echo "*";
      } else {
        echo "&nbsp;&nbsp;";
      }
    }

    $spaces = 2*($n - $i);
    for($j = 1; $j <= $spaces; $j++) {
      echo "&nbsp;&nbsp;";
    }

    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "&nbsp;&nbsp;";
  }

  for($i = $n; $i >= 1; $i--) {
    for($j = 1; $j <= $i; $j++) {
      if($j == 1 || $j == $i) {
        echo "*";
      } else {
        echo "&nbsp;&nbsp;";
      }
    }

    $spaces = 2*($n - $i);
    for($j = 1; $j <= $spaces; $j++) {
      echo "&nbsp;&nbsp;";
    }

    for($j = 1; $j <= $i; $j++) {
      echo "*";
    }
    echo "&nbsp;&nbsp;";
  }
  
?>
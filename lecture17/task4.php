<?php
function factorial() {
  $result = 1 ;
  $number = 5;
  
  for ($i = 1; $i <= $number; $i++) {
    $result *= $i;
  }

  return $result;
}

$numberG = 7;

function factorialGlobal() {
    $result = 1 ;
    global$numberG;
    for ($i = 1; $i <= $numberG; $i++) {
      $result *= $i;
    }
  
    return $result;
  }


echo factorial(),"\n";
echo factorialGlobal();
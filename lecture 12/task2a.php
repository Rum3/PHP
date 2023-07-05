<?php
function average() {
    $arg = func_get_args();
    $count = func_num_args(); 
    $sum = array_sum($arg);
  
    return $sum / $count;
  }

echo Average(2,3,4,);
?>
<?php
$numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$count = 0;
foreach ($numbers as $i) {
  if ($i === 10) {
    continue;
  }
  if ($i % 2 === 0) {
    echo "$i \n";
    $count++;
    if ($count === 5) {
      break; 
    }
  }
}

?>

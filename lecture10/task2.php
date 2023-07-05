<?php
$i = 1;
$numbers = 0;

while ($numbers < 10) {
  if ($i % 2 != 0) { 
    echo $i . "\n";
    $numbers++;
  }
  $i++;
}
?>
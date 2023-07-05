<?php
$i = 1;
$count = 0;

do {
  if ($i % 2 !== 0) {
    echo "$i \n";
    $count++;
  }
  $i++;
} while ($count < 10);
?>
<?php
$num = 2023;
$sum = 0;

do {
    $digit = $num % 10;
    $sum += $digit;
    $num = (int)($num / 10);
} while ($num > 0);

echo $sum;
?>
<?php
function sum_digits($num, $sum = 0) {
    if ($num == 0) {
        return $sum;
    }
    $digit = $num % 10;
    $sum = $sum + $digit;
    $num = intval($num / 10);
    return sum_digits($num, $sum);
}
echo sum_digits(52);
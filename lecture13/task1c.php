<?php
function countDigits($num, $count = 0) {
    if ($num == 0) {
        return $count;
    } else {
        $count++;
        return countDigits(floor($num/10), $count);
    }
}
echo countDigits(0);
?>
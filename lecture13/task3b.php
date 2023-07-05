<?php
function printReverseString($str) {
    if (strlen($str) > 0) {
        printReverseString(substr($str, 1));
        echo $str[0];
    }
}
echo printReverseString('zapka');
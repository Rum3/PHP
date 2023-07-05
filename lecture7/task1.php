<?php

$a = 4;
$b = 7;

$prime = true;
$prime = ($prime && ($a > 1)); 
$prime = ($prime && ($a % 2 != 0 || $a == 2)); 
$prime = ($prime && ($a % 3 != 0 || $a == 3));
$prime = ($prime && ($a % 4 != 0 || $a == 4)); 

//(Condition) ? (Statement1) : (Statement2);
echo $a . ($prime ? " prime" : " not prime") . "\n";

$prime = true;
$prime = ($prime && ($b > 1)); 
$prime = ($prime && ($b % 2 != 0 || $b == 2)); 
$prime = ($prime && ($b % 3 != 0 || $b == 3)); 
$prime = ($prime && ($b % 4 != 0 || $b == 4)); 
$prime = ($prime && ($b % 5 != 0 || $b == 5)); 
$prime = ($prime && ($b % 6 != 0 || $b == 6)); 
$prime = ($prime && ($b % 7 != 0 || $b == 7)); 

//(Condition) ? (Statement1) : (Statement2);
echo $b . ($prime ? " prime" : " not prime") . "\n";

?>
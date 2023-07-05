<?php
$total = 0;
$number = 0;
$numbers=0;
 
while ($numbers <= 10)
{
    if ($number % 2 == 0)
    {
        $total = $total + $number;
        $numbers = $numbers + 1;
    }
    $number++;
}
 
echo "the sum of the first 10 even numbers  $total ;";
 
?>
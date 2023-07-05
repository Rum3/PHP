<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtr($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        return $a / $b;
    }
}

$calculator = new Calculator();

$result = $calculator->add(2, 2);
echo $result . "\n";

$result = $calculator->subtr(5, 4);
echo $result . "\n";

$result = $calculator->multiply(2, 5);
echo $result . "\n";

$result = $calculator->divide(10, 2);
echo $result . "\n";


<?php
class Calculator {
    private $currentValue = 0;

    public function add($number) {
        $this->currentValue += $number;
    }

    public function subtract($number) {
        $this->currentValue -= $number;
    }

    public function multiply($number) {
        $this->currentValue *= $number;
    }

    public function divide($number) {
        $this->currentValue /= $number;
    }

    public function getCurrentValue() {
        return $this->currentValue;
    }
}


$calculator = new Calculator(2);

$calculator->add(5);
$calculator->multiply(3);
$calculator->subtract(2);


echo "Current value: ". $calculator->getCurrentValue();

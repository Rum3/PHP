<?php
class Currency {
    private $symbol;
    private $rate;
    
    public function __construct($symbol, $rate) {
        $this->symbol = $symbol;
        $this->rate = $rate;
    }
    
    public function getSymbol() {
        return $this->symbol;
    }
    
    public function getRate() {
        return $this->rate;
    }
    
    public function convertTo($amount, Currency $to) {
        $convertedAmount = $amount * ($to->getRate() / $this->rate);
        return new Money($convertedAmount, $to);
    }
}

class Calculator {
    private $baseCurrency;
    
    public function __construct(Currency $baseCurrency) {
        $this->baseCurrency = $baseCurrency;
    }
    
    public function getBaseCurrency() {
        return $this->baseCurrency;
    }
    
    public function convert($amount, Currency $to) {
        return $this->baseCurrency->convertTo($amount, $to);
    }
}

class Money {
    private $amount;
    private $currency;
    
    public function __construct($amount, Currency $currency) {
        $this->amount = $amount;
        $this->currency = $currency;
    }
    
    public function getAmount() {
        return $this->amount;
    }
    
    public function getCurrency() {
        return $this->currency;
    }
    
    public function __toString() {
        return $this->currency->getSymbol() . $this->amount;
    }
}
$usd = new Currency('USD ', 1.00);
$calculator = new Calculator($usd);
$eur = new Currency('EUR ', 0.85);
$amount = 100;
$result = $calculator->convert($amount, $eur);
echo $result;

<?php
class BankAccount {
    private $accountNumber;
    private $balance;
    private $interestRate;

    public function __construct($accountNumber, $balance, $interestRate) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount > $this->balance) {
            throw new Exception('Insufficient funds');
        }
        $this->balance -= $amount;
    }

    private function calculateInterest() {
        return $this->balance * $this->interestRate;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getInterestRate() {
        return $this->interestRate;
    }

    public function addInterest() {
        $interest = $this->calculateInterest();
        $this->balance += $interest;
    }
}
class Person {
    private $name;
    private $age;
    private $email;
    private $bankAccount;

    public function __construct($name, $age, $email, $bankAccount) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->bankAccount = $bankAccount;
    }

    public function depositMoney($amount) {
        $this->bankAccount->deposit($amount);
    }

    public function withdrawMoney($amount) {
        $this->bankAccount->withdraw($amount);
    }

    public function getBalance() {
        return $this->bankAccount->getBalance();
    }
    public function getName(){
        return $this->name;
       }
    
       public function setName($name){
        $this->name = $name;
       }
    
       public function getAge(){
        return $this->age;
       }
    
       public function setAge($age){
        $this->age = $age;
       }
    
       public function getEmail(){
        return $this->email;
       }
    
       public function setEmail($email){
        $this->email = $email;
       }
}

$person = new Person('Zah', 30, 'Zah@example', new BankAccount('123456789', 1000, 0.05));

$person->withdrawMoney(200);

echo "New balance: " . $person->getBalance();





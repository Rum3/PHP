<?php

abstract class Product {
    protected $name;
    protected $price;
    protected $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }
    abstract public function getType();
    abstract public function getAdditionalInfo();
    abstract public function calculateTotalPrice();
}

class Book extends Product {
    private $author;

    public function __construct($name, $price, $quantity, $author) {
        parent::__construct($name, $price, $quantity);
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function calculateTotalPrice() {
        return $this->getPrice() * $this->getQuantity();
    }
    public function getType() {
        return "book";
    }
    public function getAdditionalInfo() {
        return " $this->name  , by $this->author , Price:  $this->price$ , quantity: $this->quantity" ;
    }
}

class car extends Product {
    private $model;

    public function __construct($name, $price, $quantity, $model) {
        parent::__construct($name, $price, $quantity);
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function calculateTotalPrice() {
        return $this->getPrice() * $this->getQuantity();
    }
    public function getType() {
        return "car";
    }
    public function getAdditionalInfo() {
        return  " $this->name  , Model $this->model , Price:  $this->price$ ,  quantity: $this->quantity";
    }
}


class Cart {
    private $products = array();

    public function addProduct(Product $product) {
        $this->products[] = $product;
    }

    public function getTotalPrice() {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product->calculateTotalPrice();
        }

        return $totalPrice;
    }

    public function getProducts() {
        return $this->products;
    }
    
}


interface PaymentMethod {
    public function processPayment($amount);
    public function info();
}

class CreditCardPayment implements PaymentMethod {
    private $cardNumber;
    private $expirationDate;

    public function __construct($cardNumber, $expirationDate) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
    }

    public function processPayment($amount) {
    }
    public function info() {
        return "Card number: $this->cardNumber  , Expirate data: $this->expirationDate" ;
    }
}

class PayPalPayment implements PaymentMethod {
    private $user;
    private $password;

    public function __construct($user, $password) {
        $this->user = $user;
        $this->password = $password;
    }

    public function processPayment($amount) {
    }
    public function info() {
        return "User: $this->user  , Password: $this->password" ;
    }
}


$book = new Book('Срала и заспала', 10, 1, 'Шити Браун');
echo $book->getAdditionalInfo(),"\n";

$car = new Car('BMW', 10000, 4, 'E');
echo $car->getAdditionalInfo(),"\n";

$cart = new Cart();
$cart->addProduct($book);
$cart->addProduct($car);

$totalPrice = $cart->getTotalPrice();
echo "Total price: $totalPrice$,\n";

$creditCardPayment = new CreditCardPayment('1234 5678 9012 3456', '12/24',);
$creditCardPayment->processPayment($totalPrice);
echo $creditCardPayment->info(),"\n";

$payPalPayment = new PayPalPayment('example@email.com', 'password123');
$payPalPayment->processPayment($totalPrice);
echo $payPalPayment->info();

?>
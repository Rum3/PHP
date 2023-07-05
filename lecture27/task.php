<?php
class Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $color;

    
    public function __construct($make, $model, $year, $color,) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }
    
    public function intro() {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}, Color: {$this->color}";
    }
    
}

class Car extends Vehicle {
    private $numDoors;
    private $trunk;
    
    public function __construct($make, $model, $year, $color,$numDoors,$trunk) {
        parent::__construct($make, $model, $year, $color,);
        $this->numDoors = $numDoors;
        $this->trunk = $trunk;
    }
    
    public function intro() {
        return parent::intro() . ", Number of doors: {$this->numDoors} ,Lodge capacity: {$this->trunk}";
    }
}

class Truck extends Vehicle {
    private $Capacity;
    
    public function __construct($make, $model, $year, $color, $Capacity) {
        parent::__construct($make, $model, $year, $color,);
        $this->Capacity = $Capacity;
    }
    
    public function intro() {
        return parent::intro() . ", Capacity: {$this->Capacity} tn";
    }
}

class Motorcycle extends Vehicle {
    private $numWheels;
    private $engine;
    
    public function __construct($make, $model, $year, $color, $numWheels,$engine) {
        parent::__construct($make, $model, $year, $color);
        $this->numWheels = $numWheels;
        $this->engine = $engine;
    }
    
    public function intro() {
        return parent::intro() . ", Number of wheels: {$this->numWheels}, Engine : {$this->engine}HP";
    }
}
echo "Cars: \n";
$BWM = new Car("BMW","E33","1998","blue","3","200L",);
echo $BWM->intro(),"\n";
$Lada = new Car("Lada","Samara","1980","red","5","150L");
echo $Lada->intro(),"\n";
echo "Trucks: \n";
$Mercedes = new Truck("Mercedes","Arocs","2022","white","1000");
echo $Mercedes->intro(),"\n";
$CTM = new Truck("CTM","Scania","2000","Green","800");
echo $CTM->intro(),"\n";
echo "Motorcycle: \n";
$Dax = new Motorcycle("Honda","Dax","2021","Red","2","100");
echo $Dax->intro(),"\n";
$Forza = new Motorcycle("Honda","Forza","2020","Metalic","2","120");
echo $Forza->intro(),"\n";


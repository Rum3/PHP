<?php
class Car {
        protected $brand;
        protected $model;
        protected $year;
    
        public function setBrand($brand) {
            $this->brand = $brand;
        }
    
        public function setModel($model) {
            $this->model = $model;
        }
    
        public function setYear($year) {
            $this->year = $year;
        }
    
        public function getBrand() {
            return $this->brand;
        }
    
        public function getModel() {
            return $this->model;
        }
    
        public function getYear() {
            return $this->year;
        }
    }
    
class SportsCar extends Car {
    public $type;

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }
    public function info() {
        return self::getBrand() . " " . self::getModel() . ", " . parent::getYear(). ", ". $this->type ;
    }
}

$sportsCar = new SportsCar();
$sportsCar->setBrand("Ferrari");
$sportsCar->setModel("458 Italia");
$sportsCar->setYear(2015);
$sportsCar->setType("sport car");
echo $sportsCar->info(); 




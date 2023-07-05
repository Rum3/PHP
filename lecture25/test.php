<?php
class Fruit {
  public $name;
  public $color;
  public $weight;
  public function printInfo() {
    echo $this->name .$this->color . $this->weight ;
  }
}

$mango = new Fruit();
$mango->name = 'Mango';
$mango->color = 'Yellow'; 
$mango->weight = '300'; 
$mango->printInfo();
?>
<?php

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function clone() {
    return new self($this->name, $this->age);
  }
}

$person1 = new Person("Zah", 30);
$person2 = $person1->clone();

echo "Person1: " . $person1->name ." ,age: ". $person1->age. "\n";
echo "Person2: " . $person2->name ." ,age: ". $person2->age. "\n";



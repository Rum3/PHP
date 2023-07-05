<?php
class Fruit {
  public $name;
  public $color;

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
  public function printInfo() {
    echo $this->name . " , Color: " . $this->color ;
  }
}

$apple = new Fruit();
$banana = new Fruit();

$apple->set_name('Apple');
$apple->set_color('green');

$banana->set_name('Banana');
$banana->set_color('yellow');

$apple->printInfo();
echo "\n";
$banana->printInfo();
echo "\n";
echo "Fruit: ".$apple ->get_name();
echo "\n";
echo "Fruit: ".$banana ->get_name();


?>
<?php
class Radio {
    public function volume_up() {
        echo "Volume Up\n";
    }

    public function volume_down() {
        echo "Volume Down\n";
    }

    public function tune() {
        echo "Tune\n";
    }
}

class Car {
    private $radio;
    public $brand;

    function set_brand($brand){
        $this->brand = $brand;
    }
    function get_brand(){
        return $this->brand;
    }

    public function __construct(Radio $radio) {
        $this->radio = $radio;
    }

    public function set_radio() {
        $this->radio->volume_up();
        $this->radio->tune();
        $this->radio->volume_down();
    }

    public function printInfo() {
        echo $this->brand . " , with: " .  get_class($this->radio). "\n";
    }
}

$radio = new Radio();
$VW = new Car($radio);
$BMW = new Car($radio);

$VW->set_brand('volkswagen');
$BMW->set_brand('BMW');


$BMW->set_radio();
$BMW->printInfo();

$VW->set_radio();
$VW->printInfo();

echo "Car: ".$VW -> get_brand()."\n";
echo "Car: ".$BMW -> get_brand();

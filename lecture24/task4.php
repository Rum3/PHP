<?php
class Address {
  private static $city = 'Sofia';
  private static $str = 'Bulgaria';
  public function city() {
    return self::$city;
  }
  public function str() {
    return self::$str;
  }
  public function printInfo() {
    echo $this->city() . " , str: " . $this->str();
  }
}

$address = new Address();
$address->printInfo();

?>

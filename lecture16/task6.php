<?php
$cars = array(
  "car1" => 25000,
  "car2" => 30000,
  "car3" => 50000,
  "car4" => 20000,
  "car5" => 80000
);

while (list($type, $price) = each($cars)) {
  echo "Автомобил: $type – Цена: $price $\n";
}
?>

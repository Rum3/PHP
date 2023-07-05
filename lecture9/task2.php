<?php
$titles = array('г-н', 'г-ца', 'г-жа', 'д-р','други');
$title = $titles[2];

switch ($title) {
  case $title == $titles[0]:
    echo "Здравейте, г-н! \n";
    break;
  case $title == $titles[1]:
    echo "Здравейте, г-ца \n";
    break;
  case $title == $titles[2]:
    echo "Здравейте, г-жа! \n";
    break;
  case $title == $titles[3]:
    echo "Здравейте, д-р! \n";
    break;
  default:
    echo "Оооп! \n";
  }



    if ($title == $titles[0]) {
      echo "Здравейте, г-н!";
    } elseif ($title == $titles[1]) {
      echo "Здравейте, г-ца";
    } elseif ($title == $titles[2]) {
      echo "Здравейте, г-жа!";
    } elseif ($title == $titles[3]) {
      echo "Здравейте, д-р!";
    } else {
      echo "Оооп!";
    }
?>

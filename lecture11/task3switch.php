<?php
$time = 14;

switch($time){
    case $time <12 :
        echo "Добро утро!";
        break;
    case $time >= 12 && $time <18:
        echo "Добър ден!";
        break;
    default:
        echo "Добър вечер!";       
}
?>
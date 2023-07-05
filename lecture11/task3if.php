<?php
$time= 19;
if($time < 12){
    echo "Добро утро!";
} elseif ($time >= 12 && $time < 18){
    echo "Добър ден!";
} else {
    echo "Добър вечер!";
}

?>
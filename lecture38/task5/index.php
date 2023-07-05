<?php

// Пътят към XML файла
$xmlFile = 'file.xml';

// Зареждаме XML файла
$xml = simplexml_load_file($xmlFile);

// Преобразуваме XML обекта в масив
$json = json_encode($xml);

// Извеждаме JSON резултата
echo $json;

?>


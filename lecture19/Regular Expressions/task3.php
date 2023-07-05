<?php
/* Напишете програма, която използва регулярни изрази, за да 
извлече всички URL адреси от даден текстов низ*/
$text = "Това е някакъв текст с URL адрес: https://www.example.com и още един: http://google.com";
$pattern = "/\bhttps?:\/\/\S+/i";
preg_match_all($pattern, $text, $matches);

foreach ($matches[0] as $url) {
    echo $url . "\n";
}

?>

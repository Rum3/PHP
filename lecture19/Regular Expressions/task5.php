<?php
/*Напишете регулярен израз, който съответства на всички 
HTML тагове и техните атрибути в даден текстов низ*/
$text = '<p class="my-class" id="my-id">This is a paragraph.</p>';
$pattern = '/<[^>]+?(?:(\b\w+\b)(?:=(?:"[^"]*"|\'[^\']*\'))?)*>/';

preg_match_all($pattern, $text, $matches);

foreach ($matches[0] as $match) {
    echo $match . "\n";
}
?>

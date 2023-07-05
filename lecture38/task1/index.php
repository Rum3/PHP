<?php
$xml = simplexml_load_file('file.xml');

$names = []; // масив за съхранение на имената на таговете

foreach ($xml->children() as $book) { // обхождаме всеки book елемент в XML файла
    foreach ($book->children() as $tag) { // обхождаме всеки елемент на текущия book елемент
        $name = $tag->getName(); // получаваме името на текущия елемент
        if (!in_array($name, $names)) { // проверяваме дали името на тага вече е добавено в масива
            $names[] = $name; // ако не е, го добавяме
        }
    }
}

sort($names); // сортираме имената на таговете по азбучен ред

foreach ($names as $name) { // извеждаме всеки елемент на нов ред
    echo $name . "\n";
}
?>

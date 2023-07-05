<?php
/* Създайте функция, която сортира масив от асоциативни 
масиви въз основа на определен ключ във всеки подмасив*/
function sortArray($arr, $key) {
    usort($arr, function($a, $b) use ($key) {
        return $a[$key] <=> $b[$key];
    });
    return $arr;
}
$people = array(
    array('name' => 'Vesko', 'age' => 29),
    array('name' => 'Zah', 'age' => 21),
    array('name' => 'Bob', 'age' => 35),
    array('name' => 'Penio', 'age' => 25)
);

$sort = sortArray($people, 'name');

print_r($sort);

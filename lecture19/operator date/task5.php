<?php

/*Създайте скрипт, който взема списък с дати и ги сортира хронологично. Използвайте функцията strtotime(), за да 
преобразувате низовете от дати в Unix времена, а след това използвайте функцията sort(), за да сортирате 
времевите клейма във възходящ ред. И накрая, използвайте функцията date(), за да форматирате сортираните 
времеви клейма като низове от дати*/
$dates = array('2022-01-01', '2022-02-15', '2022-03-20', '2021-12-31');
$timestamps = array();

foreach ($dates as $date) {
    $timestamp = strtotime($date);
    $timestamps[] = $timestamp;
}

sort($timestamps);

$sorted_dates = array();
foreach ($timestamps as $timestamp) {
    $date = date('Y-m-d', $timestamp);
    $sorted_dates[] = $date;
}

print_r($sorted_dates);
?>

<?php
 /*Напишете скрипт за сортиране на масив от дати в 
 хронологичен ред, където датите са представени като 
 стрингове във формат "ГГГГ-ММ-ДД".*/
$dates = array(
    '2022-04-05',
    '2022-03-15',
    '2022-02-10',
    '2022-01-01'
);

function compareDates($a, $b) {
    $aTimestamp = strtotime($a);
    $bTimestamp = strtotime($b);
    
    if ($aTimestamp == $bTimestamp) {
        return 0;
    } else {
        return ($aTimestamp < $bTimestamp) ? -1 : 1;
    }
}

usort($dates, "compareDates");

var_dump($dates);

?>

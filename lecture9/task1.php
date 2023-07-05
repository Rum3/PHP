<?php
$days = array("Понеделник","Вторник","Сряда","Четвъртък","Петък","Събота","Неделя");
$day = $days[5];

if($day == $days[0] || $day == $days[1] || $day == $days[2] || $day == $days[3] || $day == $days[4]){
    echo "$day е! Спорна работа! \n";
} elseif($day == $days[5] || $day == $days[6]) {
    echo "$day е! Весел уикенд! \n";
}

switch($day){
    case $day == $days[0] || $day == $days[1] || $day == $days[2] || $day == $days[3] || $day == $days[4]:
        echo "$day е! Спорна работа!" ;
        break;
    case $day == $days[5] || $day == $days[6]:
        echo "$day е! Весел уикенд!" ;
        break;
    default:
    echo 'ooп';
}
?>
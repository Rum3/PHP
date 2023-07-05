<?php   
$month = 3;
$year = 2023;
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
for ($day = 1; $day <= $daysInMonth; $day++) {
    $day_of_week = date('w', strtotime("$year-$month-$day"));// Ако ги подредя по този начин $day,$month,$year ,отпечатва всични дни от месеца

    if ($day_of_week == 0 || $day_of_week == 6) {
        continue;
    }
    
    echo "$day,$month,$year\n";
}
?>






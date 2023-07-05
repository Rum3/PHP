<?php
function generate_month_calendar($date) {
    $bg_months = array(
        'January' => 'Януари',
        'February' => 'Февруари',
        'March' => 'Март',
        'April' => 'Април',
        'May' => 'Май',
        'June' => 'Юни',
        'July' => 'Юли',
        'August' => 'Август',
        'September' => 'Септември',
        'October' => 'Октомври',
        'November' => 'Ноември',
        'December' => 'Декември'
    );
    
$first_day = date('w', strtotime($date));
$last_day = date('t', strtotime($date));
$month_name = ucfirst(str_replace(array_keys($bg_months), array_values($bg_months), strftime('%B %Y', strtotime($date))));
$currentDay = intval(date('15'));

echo "<h2>" . $month_name . "</h2>";
echo "<table>";
echo "<tr>";

$firstDayOfWeek = $week_days = array('П', 'В', 'С', 'Ч', 'П', 'С', 'Н');
$key = array_search($firstDayOfWeek, $week_days);
$first_day -= ($key + 1);

if ($first_day < 0) {
    $first_day += 7;
}

foreach ($week_days as $day ) {
    echo "<th>" . $day . "</th>";
}
echo "</tr>";
$day = 1;
echo "<tr>";
for ($i = 0; $i < $first_day; $i++) {
    echo "<td></td>";
}
while ($day <= $last_day) {
    for ($i = $first_day; $i < 7 && $day <= $last_day; $i++) {
        if ($currentDay === $day){
            echo "<td>" . "($currentDay)" . "</td>";
            $day++;
        }else{
            echo "<td>" . $day . "</td>";
            $day++;
        }
    }
    if ($day <= $last_day) {
        echo "</tr><tr>";
    }
    $first_day = 0;
}
while ($i < 7) {
    echo "<td></td>";
    $i++;
}
echo "</tr>";
echo "</table>";
}
generate_month_calendar('2023-03-15');
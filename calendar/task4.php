<?php
 
function generate_month_calendar($date, $firstDayOfWeek = "П", $includePreviousDays = false) {
    $first_day = date('w', strtotime($date));
    $last_day = date('t', strtotime($date));
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
    $month_name = ucfirst(str_replace(array_keys($bg_months), array_values($bg_months), date('F Y', strtotime($date))));
    $currentDay = intval(date('15'));
    $count = 0;
 
    if ($firstDayOfWeek == "Н") {
        $week_days = array('Н', 'П', 'В', 'С', 'Ч', 'П', 'С');
    } else {
        $week_days = array('П', 'В', 'С', 'Ч', 'П', 'С', 'Н');
        $key = array_search($firstDayOfWeek, $week_days);
        $first_day = intval($first_day) - ($key + 1);
    }
 
    echo "<h2>" . $month_name . "</h2>";
    echo "<table>";
    echo "<tr>";
    foreach ($week_days as $day) {
        echo "<th>" . $day . "</th>";
    }
    echo "</tr>";
    echo "<tr>";
    $day = 1;
    for ($i = 0; $i < $first_day; $i++) {
        if ($includePreviousDays) {
            $previous_month_last_day = date('t', strtotime('-1 month', strtotime($date)));
            $day_number = $previous_month_last_day - ($first_day - $i - 1);
            echo "<td>" . $day_number . "</td>";
        } else {
            echo "<td></td>";
        }
    }
    while ($day <= $last_day) {
        for ($i = $first_day; $i < 7 && $day <= $last_day; $i++) {
            if ($currentDay === $day) {
                echo "<td>" . "($currentDay)" . "</td>";
                $day++;
            } else {
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
        $i++;
        $count++;
    }
 
    for ($i = 0; $i < $count; $i++) {
        if ($includePreviousDays) {
            $next_month_day = date('t', strtotime('+1 month', strtotime($date)));
            $dayNumber = abs($next_month_day - ($last_day + $i));
            echo "<td>" . $dayNumber . "</td>";
        } else {
            echo "<td></td>";
        }
    }
 
    echo "</tr>";
    echo "</table>";
 
    $zodiac = [
        'Ram' => ['start_date' => '03-21', 'end_date' => '04-19'],
        'Bul' => ['start_date' => '04-20', 'end_date' => '05-20'],
        'Twins' => ['start_date' => '05-21', 'end_date' => '06-21'],
        'Crab' => ['start_date' => '06-22', 'end_date' => '07-22'],
        'Lion' => ['start_date' => '07-23', 'end_date' => '08-22'],
        'Virgin' => ['start_date' => '08-23', 'end_date' => '09-22'],
        'Balance' => ['start_date' => '09-23', 'end_date' => '10-23'],
        'Scorpion' => ['start_date' => '10-24', 'end_date' => '11-21'],
        'Archer' => ['start_date' => '11-22', 'end_date' => '12-21'],
        'Goat' => ['start_date' => '12-22', 'end_date' => '01-19'],
        'WaterBearer' => ['start_date' => '01-20', 'end_date' => '02-18'],
        'Fish' => ['start_date' => '02-19', 'end_date' => '03-20']
    ];
 
    foreach ($zodiac as $sign => $dates) {
        $startDate = date('y') . '-' . $dates["start_date"];
        $timeStartDate = strtotime($startDate);
        $endDate = date('y') . '-' . $dates["end_date"];
        $timeEndDate = strtotime($endDate);
        $today = strtotime($date);
        if ($today >= $timeStartDate && $today <= $timeEndDate) {
            echo "Your sign is: $sign";
        }
    }
}
 
generate_month_calendar(date("2023-03-15"), "П", true, $zodiac = []);

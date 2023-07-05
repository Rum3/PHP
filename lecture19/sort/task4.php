<?php
/*Приложете персонализиран алгоритъм за сортиране, който 
сортира масив от цели числа в низходящ ред, но премества 
всички отрицателни цели числа в края на масива.*/
function customSort(array $arr): array {
    $negativeNumbers = array();
    $positiveNumbers = array();

    foreach ($arr as $num) {
        if ($num < 0) {
            array_push($negativeNumbers, $num);
        } else {
            array_push($positiveNumbers, $num);
        }
    }

    rsort($positiveNumbers);
    sort($negativeNumbers);

    return array_merge($positiveNumbers, $negativeNumbers);
}
print_r(customSort([1,4,6,2,-2,-9]));

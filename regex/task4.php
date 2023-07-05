<?php
function regex($n, $min = 300, $max = 500, $includeMin = true, $includeMax = true)
{
    $matches = '';
    if ($includeMin === true && $includeMax === true){
        $re = '/^3[0-9]{2}|4[0-9]{2}|500$/';
        preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0);
        var_dump($matches);
    }
    elseif ($includeMin === true) {
        $re = '/3[0-9]{2,}|[4-9][0-9]{2,}|[1-9][0-9]{3,}/';
        preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0);
        var_dump($matches);
    }
    elseif ($includeMax === true) {
        $re = '/500|4[0-9]{2,}|3[0-9]{2,}|2[0-9]{2,}|\b[0-9][0-9]\b|-\d{1,9}/';
        preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0);
        var_dump($matches);
    }
}
regex(350, 300, 500, true, true);
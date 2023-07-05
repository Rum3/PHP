<?php
function regex($n){
    $re = '/3[0-9]{2,}|[4-9][0-9]{2,}|[1-9][0-9]{3,}/';
    preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0);
    var_dump($matches);
}
regex("300asd");
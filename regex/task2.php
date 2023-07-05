<?php
function regex($n){
    $re = '/500|4[0-9]{2,}|3[0-9]{2,}|2[0-9]{2,}|\b[0-9][0-9]\b|-\d{1,9}/';
    preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0);
    var_dump($matches);
}
regex("500sd");
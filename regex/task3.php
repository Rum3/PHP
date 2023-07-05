<?php
function regex($n){
    $re = '/^3[0-9]{2}|4[0-9]{2}|500$/';
    if(preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0)){
        var_dump($matches);
    }
    else{
        echo 'No match found';
    }
}
regex("355asd");
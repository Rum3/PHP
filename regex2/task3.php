<?php
function regex($n, $min, $max){
    $re = '/^(' . $min . '|' . $max . '|';
    for ($i = $min + 1; $i < $max; $i++) {
        $re .= $i . '|';
    }
    $re .= $max . ')$/';
    if(preg_match_all($re, $n, $matches, PREG_SET_ORDER, 0)){
        var_dump($matches);
    }
    else{
        echo 'No match found';
    }
}
regex(400, 300, 500);
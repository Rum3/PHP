<?php

function is_palindrome(){
 $str = 'bobob';
 $strRev = strrev($str);
 return $str === $strRev;
}

echo is_palindrome() ? "true" : "false";

?>
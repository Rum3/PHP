<?php
$books = [
    ["book1","avtor1",2001] ,
    ["book2","avtor2",2002] ,
    ["book3","avtor3",2003] ,
];
$myJson = json_encode($books);
$myJsonDecode = json_decode($myJson);
echo $myJson;
var_dump($myJsonDecode);
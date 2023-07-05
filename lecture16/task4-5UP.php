<?php
$books = [
    ["book1","avtor1",2001] ,
    ["book2","avtor2",2002] ,
    ["book3","avtor3",2003] ,
];
$myJson = json_encode($books);
file_put_contents('books.json', $myJson);

$myJsonEncode = file_get_contents('books.json');
$myJsonDecode = json_decode($myJsonEncode);

var_dump($myJsonEncode);


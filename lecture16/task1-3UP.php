<?php
$fruits = ["apple"=> 3 , "orange" => 2 , "cucamber" => 5 , "pineapple" => 4 , "berry" => 4];
$data = serialize($fruits);
$file_path = 'my_file.txt';
file_put_contents($file_path, $data);

$dataSerialize = file_get_contents('my_file.txt');
$test = unserialize($dataSerialize);

var_dump($dataSerialize);



?>

<?php
$fruits = ["apple"=> 3 , "orange" => 2 , "cucamber" => 5 , "pineapple" => 4 , "berry" => 4];
$data = serialize($fruits);
$test = unserialize($data);
echo $data;
var_dump($test);
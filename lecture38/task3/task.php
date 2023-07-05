<?php
$xmlFile = 'file.xml';

$xml = simplexml_load_file($xmlFile);

$json = json_encode($xml);

$file = 'file.json';

file_put_contents($file, $json);

echo 'JSON file created successfully.';

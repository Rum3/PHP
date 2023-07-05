<?php
use app\child\Post;
use app\child\Get;

require_once realpath('vendor/autoload.php');

$post = new Post();
$post->myKey = 'post';

$myValue = $post->myKey;
var_dump($myValue);

if (isset($post->myKey)) {
    var_dump($post->myKey);
}

unset($post->myKey);

$get = new Get();
$get->myKey = 'get';

$myValue = $get->myKey;
var_dump($myValue);

if (isset($get->myKey)) {
    var_dump($get->myKey);
}

unset($get->myKey);

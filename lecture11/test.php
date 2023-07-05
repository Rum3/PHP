<?php

function getGreetingFunction() {
    $timeOfDay = 'morning';

    return( function($name) use (&$timeOfDay){
        return("good $timeOfDay , $name");
    });
};

$greetingFunction = getGreetingFunction();
echo $greetingFunction ("Fred");
?>
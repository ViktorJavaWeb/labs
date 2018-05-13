<?php
function printHelloMessage(){
    echo 'Hello! Welcome again!';
}

function printGoodBayMessage(){
    echo 'Buy! Have a nice day!';
}


$isWelcome = true;
$x = rand(0, 1);
$x ? printHelloMessage() : printGoodBayMessage();
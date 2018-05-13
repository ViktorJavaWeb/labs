<?php

function getRandomNumber($x, $y){
    return rand($x ,$y);
}

function calculateSum($x, $y){
    echo 'calculateSum - ' . ($x + $y) . '<br>';
    return $x + $y;
}

function multiply($x, $y){
    echo 'multiply - '. ($x * $y) . '<br>';
    return $x * $y;
}

calculateSum(2,3);
multiply(2,3);
echo 'getRandomNumber - ' . getRandomNumber(0, 50);
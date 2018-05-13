<?php
function calculateFactorial($x){
    $z = $x;
    while($x>1){
        $y = $x-1;
        $z = $z * $y;
        $x = $y;

    }
    echo 'calculateFactorial <h4> result - '.$z.'</h4>';
}

calculateFactorial(5);

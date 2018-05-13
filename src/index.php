<?php
function recursiveCounter($x){
    $y = $x+1;
    echo $y;
    if($y == ($x+1)){
        echo 'recursiveCounter - '. $y;
    }
}

recursiveCounter(8);
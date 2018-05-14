<?php
$nub = array(1,2,3,4,5,6);

$min = min($nub);
$max = max($nub);

echo 'min - ' . $min . '<br>'.
    'max - ' , $max. '<br>';

foreach ($nub as $key => $item){
    if(($item % 2) == 0){
       echo '$item - ' . $item . '<br>';
    }
}
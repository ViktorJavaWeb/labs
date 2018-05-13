<?php
function notNull($x, $y)
{
    if (!isset($x) or !isset($y)) {
        if (!isset($x)) {
            $errx = '$x - пустой';

        }
        if (!isset($y)) {
            $erry = '$y - пустой';

        }
    }
    return $errx.$erry;
}

function multiplication($x, $y){
    if (!notNull($x, $y)){
        return $x * $y;
    }else {
        $err = notNull($x, $y);
    }
    return $err;
}

function division($x, $y){
    if (!notNull($x, $y)){
        if($y != 0){
            return $x / $y;
        }else {
            $err = 'На ноль делить нельзя';
        }
    }
    return $err;
}

function addition($x, $y){
    if (!notNull($x, $y)){
        return $x + $y;
    }else {
        $err = notNull($x, $y);
    }
    return $err;
}

function substraction($x, $y){
    if (!notNull($x, $y)){
        return $x - $y;
    }else {
        $err = notNull($x, $y);
    }
    return $err;
}


$r = multiplication(4,5);
echo 'multiplication - ' . $r . '<br>';

$r = division(5,5);
echo 'division - ' . $r . '<br>';

$r = addition(5,50);
echo 'addition - ' . $r . '<br>';

$r = substraction(12,60);
echo 'substraction - ' . $r . '<br>';
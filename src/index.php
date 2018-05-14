<?php
$sequence = array(1,2,3,4,5,6);
$shuffle = array(5,6,2,3,4,1);

$arrList = $shuffle;

echo 'Number of elements in the array - ' . count($arrList) . '<br><br>';

for ($i = 0; $i < count($arrList); $i++){
    if($i == 0){
        echo 'First elements - ' . $arrList[$i] . '<br>';
    }
    if($i == count($arrList)-1){
        echo 'Last elements - ' . $arrList[$i] . '<br>';
    }
}



$varString = 'Lorem ipsum';
$arrWorld = explode (' ', $varString);

array_push($sequence, $arrWorld);
$arr = array_merge($arrWorld, $sequence);
print_r($arr);

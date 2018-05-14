<?php
$numbArray = array();
$grater = 10;

for ($i = 0; $i <= 100; $i++) {
    array_push($numbArray, $i);
}


for ($i = 0; $i < count($numbArray); $i++) {
    if ($grater == $numbArray[$i]) {
        echo 'Element array - ' . $numbArray[$i] . '<br>';
        $t = pow($numbArray[$i], 2);
        echo 'Pow element array - ' . $t . '<br>';
    }
}
print_r($numbArray);
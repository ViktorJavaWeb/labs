<?php
for($i = 0; $i < 6; $i++){
    $arrKey[] = rand(100, 110);
}

for($i = 0; $i < count($arrKey); $i++){
    echo "arrKey[$i] - " . $arrKey[$i]. '<br>';
    $arrKeyHashes[] = md5($arrKey[$i]);
    echo $arrKeyHashes[$i]. '<br>';
}

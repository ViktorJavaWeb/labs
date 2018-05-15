<?php
$arrKey = ['h','P','L','k','Q','R'];

$keyHach = md5('L');
echo '$keyHach - ' . $keyHach . '<br><br>';

foreach($arrKey as $key => $item){
    if(md5($item) == $keyHach){
        echo 'HELLO!!!!';
    }
}
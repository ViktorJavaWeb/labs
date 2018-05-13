<?php
$stringContent = '----------------------------------------';
$stringContentString = 'Hello student!!!!!!';

function drawDelimiter(){
    global $stringContent;
    echo $stringContent.'<br>';
}

function drawContentString(){
    global $stringContentString;
    echo $stringContentString.'<br>';
}

drawDelimiter();
drawContentString();
drawDelimiter();
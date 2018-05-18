<?php
require_once 'Computer.php';


$labs = new Computer();

$labs->start();
$labs->restart();
$labs->shutdown();
$labs->restart();
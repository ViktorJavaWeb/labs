<?php
require_once 'Computer.php';
require_once 'Asus.php';
require_once 'Lenovo.php';
require_once 'MacBook.php';


$comp = new Computer();
$comp->identUser('Computer');

$asus = new Asus();
$asus->identUser('Asus');


$lenovo = new Lenovo();
$lenovo->identUser('Lenovo');
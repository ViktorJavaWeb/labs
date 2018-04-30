<?php

/*
    (int), (integer) - приведение к integer
    (bool), (boolean) - приведение к boolean
    (float), (double), (real) - приведение к float
    (string) - приведение к string
    (array) - приведение к array
    (object) - приведение к object
    (unset) - приведение к NULL
*/

/*
o Boolean to Integer и наоборот (для целочисленного ученика следует попробовать преобразовать в bool положительные, отрицательные и нулевые числа)
o Float to Integer и наоборот
o String to Integer и наоборот (для строк ученик должен попробовать преобразовать строки с номерами в контент)
o Массив для строки и наоборот
o Массив к объекту и обратно
• Студент может попытаться преобразовать другие типы переменных*/



$variableName = (float)'5';
$variableName = (int)$variableName;

$variableName = 5;
$variableName = (float)$variableName;
$variableName = (double)$variableName;


$variableName = '5';
$variableName = (int)$variableName;

$variableName = '5';
$variableName = (array)$variableName;
$variableName = implode($variableName);

$variableName = '5';
$variableName = (object)$variableName;
$variableName = (array)$variableName;

var_dump ($variableName);

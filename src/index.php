<?php
$students = array(
    'vik' => array('name' => 'Viktor', 'age' => 25, 'gender' => 'men'),
    'tetyan' => array('name' => 'Tetyana', 'age' => 30, 'gender' => 'women')
);

function findStudent($name, $students){

    foreach ($students as $key => $item){

        if($name == $key){
            foreach ($item as $key2 => $item2){
                echo $key2 . ' => ' . $item2 .'<br>';
            }
            exit();
        }else{
            echo "Такого студента несуществует";
        }
    }
}

findStudent('ff', $students);
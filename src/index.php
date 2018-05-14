<?php
function findStudent($name, $students){
    foreach ($students as $key => $item){
        if($name == $key){
            foreach ($item as $key2 => $item2){
                echo $key2 . ' => ' . $item2 .'<br>';
            }
        }else{
           // echo "Такого студента несуществует";
        }
    }
}

function addArray($a, $name, $b){
    $a = array_merge($a[$name], $b);
    return $a;
}


$students = array(
    'vik' => array('name' => 'Viktor', 'age' => 25, 'gender' => 'men'),
    'tetyan' => array('name' => 'Tetyana', 'age' => 30, 'gender' => 'women')
);

$arr = array('lessons' => array('JAVA'));
$langProgram = array('java', 'javascript', 'php', 'cu');

findStudent('vik', $students);


foreach ($students as $key => $item){
        foreach ($item as $key2 => $item2){
            print_r(addArray($students, $key, $arr));
        }
}
//print_r($students);
<?php
$students = array(
    'vik' => array(
        'name' => 'Viktor',
        'age' => 30,
        'gender' => 'men',
        'language' => 'eng'
    ),
    'tatyana' => array(
        'name' => 'Tatyana',
        'age' => 25,
        'gender' => 'women',
        'language' => 'ukr'
    )
);


function searchSkills ($students, $language){

    foreach($students as $key){

        foreach($key as $key1 => $item){
            if($language == $key1){
                echo 'Hello ' . $key['name'] . ' language - ' . $item . '<br>';
            }
        }
    }
}

searchSkills($students, 'language');
<?php

/*
    Monday
    Tuesday
    Wednesday
    Thursday
    Friday
    Sunday
    Saturday

*/

$firstTimeDay = 9; // начало рабочего дня
$lastTimeDay = 18; // конец рабочего дня
$time = '8'; // задаваемое время дня
$dayWeek = 'Monday';


//var_dump(empty($time));


if (isset($dayWeek) && isset($time)){
    if (!($dayWeek == 'Sunday' or $dayWeek == 'Saturday') and $time <= 24) {
        if ($firstTimeDay < $time and $lastTimeDay > $time) {
            $time = $lastTimeDay - $time;
            echo "<h4>Количество часов до окончания рабочего дня - $time часа</h4>";
        } elseif ($time < $firstTimeDay) {
            $time = $firstTimeDay - $time;
            echo "<h4>Количество часов до начала рабочего дня - $time часа</h4>";
        }
        if ($lastTimeDay < $time) {
            $time = $time - $lastTimeDay;
            echo "<h4>Количество часов после окончания рабочего дня - $time часа</h4>";
        }
    }elseif ($dayWeek == 'Sunday' or $dayWeek == 'Saturday'){
        echo "ВЫХОДНЫЕ  !!!!!!!!!!!!!!!!!!!!";
    }else{
        echo "WARNING!!!!!!!";
    }
}else{
    echo "WARNING !";
}
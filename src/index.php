<?php
/*
  LAB_1.4_Bonus

 * Item	Description
Goal	Getting a practical experience in
•	using numeric, associative and multidimensional arrays
•	using loops for, while, foreach
•	using loop operators continue and break
Preparation	No special preparation
Task	Write a program, witch can draw calendar.
A special opportunity of this calendar will be drawing some period of months in the year. For example, a period from march to may.
Execution\ methodology 	Remind that  student should apply his or her knowledge of:
•	how to declare array variables
•	how to use default and custom functions
•	how to use branching
•	how to use different loops and loop operators
•	how to provide arithmetic operations and concatenation
Execute following steps:
•	Student should create new directory in yours domain directory
•	Student should create index.php file
•	Student should create function getMonthName witch will accept parameter with month number and return name of needed month
•	Student should create function getWeekDays witch will return array with relation of numbers and names of days
•	Student should create function getMonthCalendar witch will accept parameters with number of month and year and return array of arrays of weeks with days in the current month
•	Student should create function buildCalendarTable witch will call function getMonthCalendar and convert result to user-friendly table like this:
May 2016
Monday	Tuesday	Wednesday	Thursday	Friday	Saturday	Sunday
						1
2	3	4	5	6	7	8
9	10	11	12	13	14	15
16	17	18	19	20	21	22
23	24	25	26	27	28	29
30	31
•	Students may to try to perform a task in different method and execute the program
Evaluation	•	the program must work correctly;
Closure	Issues discussion, on demand
Reporting	No special reporting


*/

function draw_calendar($month, $year){
    $headings  = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');
    $mont = array('January','February','March','April','May','June','July','August','September','October','November','December');

    $running_day = date('w', mktime(0,0,0,$month,1,$year));
    $running_day = $running_day - 1;

    $days_in_month = date('t',mktime(0,0,0,$month,1,$year));

    echo '<h3>'.$mont[$month-1].'</h3>';

    echo '<table border="1">';
        echo '<tr>';
            for($t = 0; $t < count($headings); $t++){
                if ($t == 5 or $t == 6){
                    echo '<th border="1" bgcolor="#ff4500">' . $headings[$t] . '</th>';
                }else{
                    echo '<th border="1">' . $headings[$t] . '</th>';
                }
            }

        echo '</tr>';
        echo '<tr>';
            $count = $running_day;
            while($running_day != 0){
                echo '<td></td>';
                $running_day--;
            };

        for($list_day = 1; $list_day <= $days_in_month; $list_day++){
            $count++;
            if($count == 6 or $count == 7){
                echo '<td border="1" bgcolor="#ff4500">' .$list_day.'</td>';
            }else{
                echo '<td border="1">' .$list_day.'</td>';
            }

            if($count == 7){
                $count = 0;
                echo '</tr>';
            }
        }
    echo '</table>';
}

draw_calendar(12,2018);
<?php
/**
 * Item	Description
Goal	Create resume generator
Preparation	No special preparation
Task	Student should create console application for generate resume from prepared data array
Execution\ methodology 	Remind that  student should apply his or her knowledge of:
•	How to use arrays
•	How to create and use custom and predefined functions
•	How to use loops
•	How to customize console output
Execute following steps:
•	Student should prepare data array for generate resume:
o	Array must contains next blocks:
	Personal data
	Contacts
	Objective
	Summary
	Skills
	Experience
	Education
	Additional information
o	Each of resume block must contain next keys:
	title – contains category name
	destination – target in template (will be converted to template variable)
	data – array of arrays with block’s content. Each data item must be an array and contains next parameters:
•	type – some string for check output rendering type (required parameter)
•	data – string or array with data to render (required parameter)
•	label – string with field’s label (not required parameter)
•	Student should create function for concert array to strings and render results to console with next rules:
o	each  block’s title must to be in uppercase and highlights with some color
o	each label must to be bold
o	array items must be imploded with coma symbol
•	Student should create template file. Resume blocks must to be rendered depending of variable’s order in template
Evaluation	•	the program must work correctly (without errors and warnings);
•	the data array must to be easy scalable
•	all blocks from data array must be printed
Closure	Issues discussion, on demand
Reporting	No special reporting

 */


$arrResume = array(
    'personal_Data' => array(
                            'title' => 'personal Data',
                            'destination' => 'XXXXXXXXX',
                            'data ' => array(
                                            'type' => '',
                                            'data' => '',
                                            'label' => ''
                            )
    ),
    array(
        'title' => 'contacts',
        'destination' => 'XXXXXXXXX',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
    array(
        'title' => 'objective',
        'destination' => 'YYYYYYYYYY',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
    array(
        'title' => 'summary',
        'destination' => 'WWWWWWWWWWWW',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
    array(
        'title' => 'skills',
        'destination' => '',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
    array(
        'title' => 'experience',
        'destination' => '',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
    array(
        'title' => 'education',
        'destination' => '',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )

    ),
    array(
        'title' => 'additionalInformation',
        'destination' => '',
        'data ' => array(
            'type' => '',
            'data' => '',
            'label' => ''
        )
    ),
);


foreach ($arrResume as $key){
    foreach ($arrResume as $key => $item){
        echo '<br>';
        foreach($item as $r => $t){
            if(!is_array($t)){
                echo"$r => $t";
                echo '<br>';
            }
        }
    }
}
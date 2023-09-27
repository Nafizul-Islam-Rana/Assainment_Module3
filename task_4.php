<?php
$studentGrades = [
    "Student1" => ["Math" => 85, "English" => 90, "Science" => 88],
    "Student2" => ["Math" => 78, "English" => 82, "Science" => 84],
    "Student3" => ["Math" => 92, "English" => 88, "Science" => 90],
    ];

    function printAvgGrades($gradesArray) {
        foreach ($gradesArray as $student => $subjects) {
           $total = array_sum($subjects);
           $average = $total / count($subjects);
           
           echo $student . ": Average Grade = " . $average . "\n";
        }
    }

    printAvgGrades ($studentGrades);

?>
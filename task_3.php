<?php

$grades = [85, 92, 78, 88, 95];

function sortAndPrintGrades($gradesArray) {
    rsort($gradesArray);

    print_r($gradesArray);
}

sortAndPrintGrades($grades);
?>
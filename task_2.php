<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumbers($array) {
    $result = array_filter($array, function($number) {
        return $number % 2 !=0;
    });

    print_r($result);
}

removeEvenNumbers($numbers);
?>
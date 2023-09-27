<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifyText($inputText){
    $inputText = strtolower($inputText);

    $modifiedText = str_replace("brown", "red", $inputText);

    echo $modifiedText;
}

modifyText($text);
?>
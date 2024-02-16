<?php

// Variables
$paragraph = $_GET['paragraph'];
$bad_word = $_GET['text'];

// Print paragraph
echo $paragraph;

// Print paragraph lenght
echo strlen(trim($paragraph));

// New paragraph
$new_paragraph = str_replace($bad_word, '***', $paragraph);

// Print new paragraph
echo $new_paragraph;
var_dump(trim($new_paragraph));
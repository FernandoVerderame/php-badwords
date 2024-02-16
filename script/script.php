<?php

$paragraph = $_GET['paragraph'];
$bad_word = $_GET['text'];

echo $paragraph;

echo strlen(trim($paragraph));

$new_paragraph = str_replace($bad_word, '***', $paragraph);

echo $new_paragraph;

var_dump(trim($new_paragraph));
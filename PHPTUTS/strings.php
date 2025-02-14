<?php

//variables
$name = 'Yoshi';
$age = 30;
//constants
define('BIRTHDATE', 86);

//strings
$stringOne = "my email is ";
$stringTwo = "e@ee.ee";
//concat
echo $stringOne . $stringTwo;
echo "hey i am " . $stringTwo;
// string literal template (double quotes like backticks in JS)
echo "i am $name";
//escape chars
echo "the ninja screamed \"whaa\"";
echo "the ninja screamed 'whaa'";

// string functions
echo strlen($name);
echo strtoupper($name);
echo strtolower($name);
echo str_replace('Y', 'w', $name);

echo $name[1];
?>
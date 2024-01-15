
<?php
echo "Hello World!";
?>

// Echo is a function that prints out the string that is passed to it.
// Note: in php, all statements must end with a semicolon.

// Variables
<?php
$my_variable = "Hello World!";
echo $my_variable;
?>

// Variables in php start with a dollar sign ($).
// Variables are assigned with the = operator.
// Variables can be printed with the echo function.

// Data Types
<?php
$my_string = "Hello World!";
$my_number = 42;
$my_array = array("red", "green", "blue");
$my_bool = true;
?>

// Strings are sequences of characters, like "Hello World!".
// Numbers can be integers (whole numbers) or floats (decimals).
// Arrays are ordered lists of values.
// Booleans are either true or false.

//php doesn't require you to declare variables type before assigning them values.

// Concatenation
<?php
$my_name = "Sunny";
$my_age = 100;
echo "My name is " . $my_name . " and I am yonger than" . $my_age . " years old.";
?>

// Concatenation is the process of joining strings together.
// In php, concatenation is performed with the . operator.

// Arrays
<?php
$my_array = array("do", "re", "mi");
echo $my_array[0];
$my_array[1] = "la";
echo $my_array[1];
array_push($my_array, "fa");
echo count($my_array);
?>


<?php

// What is a variable

// Variable types

// Declare variables
$name = 'string'; //string
$age = 28; //number
$bool = true;
$height = 1.85; //double
$void = null; //null

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age;

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($bool) . '<br>';
echo gettype($height) . '<br>';
echo gettype($void) . '<br>';

// Print the whole variable
var_dump($name, $age, $bool, $height, $void);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name) . '<br>';

// Variable checking functions
is_string($name); //false
is_int($age); //true
is_bool($bool); //true
is_double($height); //true

// Check if variable is defined
isset($name); //true

// Constants
define('PI', 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';

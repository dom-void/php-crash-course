<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
$a += $b; echo $a . '<br>';
$a -= $b; echo $a . '<br>';
$a *= $b; echo $a . '<br>';
$a /= $b; echo $a . '<br>';
$a %= $b; echo $a . '<br>';

// Increment operator
echo $a++ . '<br>';
echo ++$a . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo --$a . '<br>';

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(5);
is_numeric("3.45"); //true

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
var_dump($number);
$number = (int)$strNumber;
var_dump($number);
$number = floatval($strNumber);
var_dump($number);
$number = intval($strNumber);
var_dump($number);

// Number functions

// Formatting numbers
echo '<br>';
$number = 123456789.12345;
echo number_format($number, 2, ',', ' ');

// https://www.php.net/manual/en/ref.math.php

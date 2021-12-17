<?php

// Create simple string
$str = 'MÓJ';
$string = 'Hej hej, oto ' . $str . ' string';
$string2 = "Hej hej, oto $str string";
echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation
echo 'Hello ' . 'World!' . '<br>';
echo crypt($string2, 'taxt');

// String functions

// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php
<?php

// Print current date
echo date('Y-m-d H:i:s');
echo '<br>';

// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);
echo '<br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s');
echo '<br>';

// Print current timestamp
echo time(); // no. of seconds since 1.1.1970
echo '<br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2020-10-12 09:00:00');
echo '<pre>';
print_r($parsedDate);
echo '</pre>';

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$parseString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $parseString);
echo '<pre>';
print_r($parsedDate);
echo '</pre>';
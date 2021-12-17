<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1';
}

// Without circle braces
if ($age === 20) echo '1';

// Sample if-else
if ($age > 20) {
    echo '1';
} else {
    echo '2';
}

// Difference between == and ===

// if AND
if ($age == 20 && $salary < 300000) echo 'OK';

// if OR
if ($age == 20 || $salary < 300000) echo 'OK';

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18; // if $age exists take $age, if not, take 18
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';  // if name exists, take $name, if not, take 'John'

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}
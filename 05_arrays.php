<?php

// Create array
$arr = [1, 2, 3, 4, 5, 6];
$fruits = ['apple', 'banana', 'orange'];

// Print the whole array
var_dump($fruits);

// Get element by index

// Set element by index

// Check if array has element at index 2

// Append element
$fruits[] = 'peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
echo array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
echo array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "bannana, apple, peach";
echo '<pre>';
var_dump(explode(", ", $string));
echo '</pre>';

// Combine array elements into string
echo implode("&", $fruits);

// Check if element exist in the array
echo '<pre>';
var_dump(in_array("apple", $fruits));
echo '</pre>';

// Search element index in the array
echo '<pre>';
var_dump(array_search('orange', $fruits));
echo '</pre>';

// Merge two arrays
$vegetables = ["Potato", "cucumber"];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump(([...$fruits, ...$vegetables])); // php >7.4
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 33,
    'hobbies' => ['Tennis', 'Video Games']
];
echo '===============================================';
echo '<pre>';
print_r($person);
var_dump($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';
echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if (isset($person['address'])) {
//     $person['address'] = 'unknown';
// }
$person['address'] ??= 'unknown'; // php >7.4
echo '<pre>';
print_r($person);
echo '</pre>';

// Check if array has specific key

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person);     // keys
echo '<pre>';
print_r($person);
echo '</pre>';
asort($person);     // values
echo '<pre>';
print_r($person);
echo '</pre>';

// Two dimensional arrays
$todos = [
    [
        'title' => 'Todo title 1',
        'completed' => true
    ],
    [
        'title' => 'Todo title 2',
        'completed' => false
    ]
];
echo '<pre>';
print_r($todos);
echo '</pre>';
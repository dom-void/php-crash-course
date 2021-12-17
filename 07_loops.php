<?php

// while
$counter = 0;
while ($counter < 10) {
    echo $counter.'<br>';
    $counter++;
}
// Loop with $counter

// do - while
do {
    echo $counter.'<br>';
    $counter++;
} while ($counter < 15);
// for
for ($i = 0; $i < 10; $i++) {
    echo 'i='.$i.'<br>';
}
// foreach
$fruits = ['banana', 'apple', 'orange'];
foreach ($fruits as $i => $fruit) {
    echo $i.' '.$fruit.'<br>';
}

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Pid',
    'age' => 100,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    echo $key
            .': '
            .(
                is_array($value)
                    ? implode(', ', $value)
                    : $value
            )
            .'<br>';
}
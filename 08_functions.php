<?php

// Function which prints "Hello I am Zura"
function hello() {
    echo "<p>Hello <b>PHP</b> world</p>";
}
hello();

// Function with argument
function hey($name) {
    echo "Hello I am $name";
}
hey('PHP');
echo '<br>';

// Create sum of two functions
function sum($a, $b) {
    echo $a + $b;
}
sum(5, 3);
echo '<br>';

// Create function to sum all numbers using ...$nums
function sumerize(...$numbers) {
    $acc = 0;
    foreach ($numbers as $number) {
        $acc += $number;
    }
    return $acc;
}
echo sumerize(1, 2, 3, 4, 5, 6);
echo '<br>';

// Arrow functions
function sumit(...$nums) {
    return array_reduce($nums, fn($acc, $n) => $acc + $n);
}
echo sumit(1, 2, 3, 4, 5);

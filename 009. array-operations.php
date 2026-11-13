<?php

$numbers = [1, 2, 3, 4, 5];

// array map
$doubled = array_map(function($number) {
    return $number * 2;
}, $numbers);

// array filter
$filtered = array_filter($numbers, function($number) {
    return $number % 2 === 0;
});

// array reduce
// carry -> return value from the previous iteration
// number -> current element
// 0 -> initial value
$sum = array_reduce($numbers, function($carry, $number) {
    return $carry + $number;
}, 0);

print_r($doubled);
print_r($filtered);
print_r($sum);

echo "\n";

// array destructuring
list($first, $second, $third) = $numbers;

print_r($first . ", ");
print_r($second . ", ");
print_r($third);
echo "\n";

// associative destructuring
$user = [
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john.doe@example.com'
];

list('name' => $name, 'age' => $age, 'email' => $email) = $user;

print_r($name . ", ");
print_r($age . ", ");
print_r($email);
echo "\n";

// spread operator (...)
$part1 = [6, 7, 8];
$part2 = [...$part1, 9, 10, 11];

print_r($part2);
echo "\n";
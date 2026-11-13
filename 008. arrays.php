<?php

$fruits = ['apple', 'banana', 'orange'];
$fruits[] = 'grape';

echo $fruits[0];
echo "\n";
echo count($fruits);
echo "\n";

// associative array
$user = [
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john.doe@example.com',
];

echo $user['name'];
echo "\n";

// key-value pairs
foreach ($user as $key => $value) {
    echo $key . ': ' . $value . "\n";
}

// multi-dimensional arrays
$users = [
    ['name' => 'John Doe', 'age' => 30, 'email' => 'john.doe@example.com'],
    ['name' => 'Jane Doe', 'age' => 25, 'email' => 'jane.doe@example.com'],
];
echo $users[0]['name'];
echo "\n";

// common array functions
$user = [
    'name' => 'Bob Smith',
    'age' => 35,
    'email' => 'bob.smith@example.com'
];

array_push($users, $user); // append new user -> same as "$users[] = $user;"
print_r($users);

$user = array_pop($users); // remove last user
print_r($user);
echo "\n";

$user = array_shift($users); // remove first user (re-indexing the rest)
print_r($user);
echo "\n";

$user = [
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john.doe@example.com'
];
array_unshift($users, $user); // prepend new user -> same as "$users[] = $user;"
print_r($users);

var_dump(in_array('apple', $fruits)); // check availability

echo array_search("banana", $fruits); // returns the key of the value or false
echo "\n";

$user_keys = array_keys($user); // returns an array of keys
print_r($user_keys);
echo "\n";

$user_values = array_values($user); // returns an array of values
print_r($user_values);
echo "\n";

$merged_array = array_merge($fruits, $user); // merge arrays
print_r($merged_array); // 'print_r()' -> print arrays

$sliced_array = array_slice($fruits, 1, 3); // slice array -> 1-3 indexed items
print_r($sliced_array);

sort($fruits); // sort array in ascending order
print_r($fruits);

rsort($fruits); // sort array in descending order
print_r($fruits);

ksort($user); // sort array by keys
print_r($user);
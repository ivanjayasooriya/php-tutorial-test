<?php

$a = "Hello";
echo $a;
echo "\n";

$a .= " World";
echo $a;
echo "\n";

// null coalescing operator
$name = null;
$username = $name ?? "Guest";
echo $username;
echo "\n";

// object
$student = [
    "name" => "John Doe",
    "age" => 25,
    "grade" => "A",
];

echo $student["name"];
echo "\n";

// spaceship operator
$a = 10;
$b = 20;

$result = $a <=> $b;
echo $result; // -1 (a < b)
echo "\n";
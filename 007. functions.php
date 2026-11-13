<?php
declare(strict_types=1); // enable strict typing

// $greeting has a default value of "Hello"
function sayHello($name, $greeting = "Hello") {
    echo "$greeting, $name!";
}

sayHello("World");
echo "\n";
sayHello("Alice", "Hi");
echo "\n";

// type declaration
function add(int $a, int $b): int
{
    return $a + $b;
}

function divide(float $a, float $b): float|null
{
    return $b !== 0.0 ?  $a / $b : null;
}

$result = add(1, 2);
$result2 = divide(1.0, 2.0);

echo $result;
echo "\n";
echo $result2;
echo "\n";

// variadic functions
function sum(...$numbers): int
{
    return array_sum($numbers);
}

echo sum(1, 2, 3, 4);
echo "\n";

// named arguments
function namedArguments(int $a, int $b = 20, int $c = 30): int
{
    return $a + $b + $c;
}

echo namedArguments(a: 1, c: 3);
echo "\n";

// anonymous functions
$add = function(int $a, int $b): int {
    return $a + $b;
};

echo $add(1, 2);
echo "\n";

// anon functions with 'use' keyword
$factor = 2;
$double = function(int $a) use ($factor): int {
    return $a * $factor;
};

echo $double(1);
echo "\n";

// arrow functions
$triple = fn(int $a): int => $a * $factor;

echo $triple(1);
echo "\n";
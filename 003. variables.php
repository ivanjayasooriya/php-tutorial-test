<?php

// use '$'
$name = "John Doe";
$age = 30;
$price = 99.99;
$isActive = true;

// data types
$integer = 42;
$float = 99.99;
$string = "Hello, World!";
$boolean = true;
$array = [1, 2, 3];
$null = null;
$object = new stdClass();

// show the TYPE(value)
var_dump($integer);

// returns the type as a string
echo gettype($integer);
echo "\n";

// converts numeric string to integer
echo "5" + 3;
echo "\n";

// string concatenation
echo "5" . 3;
echo "\n";

// type casting
var_dump((bool) 0);

// constant
const APP_NAME = "MyApp";
echo APP_NAME;
<?php

$name = "Ivan";
$user = [
    "name" => "Oshan",
    "age" => 25,
];

echo "Hello, $name!"; // variables inside double quotes
echo "\n";
echo "Hello, {$user["name"]}"; // variables inside curly braces (array/property access)
echo "\n";
echo 'Hello, $name!'; // literally prints 'Hello, $name!'
echo "\n";
echo "Hello, " . $name . "!"; // concatenation
echo "\n\n";

// HEREDOC
echo <<<HEREDOC
Hello, $name!
How are you?
HEREDOC;

echo "\n";

// NOWDOC
echo <<<'NOWDOC'
Hello, $name!
How are you?
NOWDOC;

echo "\n\n";

// string functions
echo strlen("hello");
echo "\n";

echo strtoupper("hello\n");
echo strtolower("HELLO\n");

echo trim("   hello   "); // removes whitespace from both ends
echo "\n";

echo str_replace("world", "PHP", "hello world!"); // hello PHP!
echo "\n";

print_r(explode(",", "a,b,c")); // string to array

echo implode(", ", ["a", "b", "c"]); // array to string
echo "\n";

echo substr("hello", 1, 3); // index 1-3 ('ell')
echo "\n";

echo strpos("Hello, World!", "World"); // find String starting index
echo "\n";

echo sprintf("Hello, %s!", "World"); // formatted String output
echo "\n";

var_dump(str_contains("Hello, World!", "World")); // check if string contains substring

var_dump(str_starts_with("hello", "he")); // starts with

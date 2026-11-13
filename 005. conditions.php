<?php

$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} elseif ($age >= 13) {
    echo "You are a teenager.";
} else {
    echo "You are a child.";
}

echo "\n";

// ternary
$message = ($age >= 18) ? "Adult" : "Minor";
echo $message;
echo "\n";

// java switch
$score = 85;

$result = match(true) {
    $score >= 90 => "Excellent",
    $score >= 70 => "Good",
    $score >= 50 => "Pass",
    default => "Fail"
};
echo $result;
<?php

// for loop
for ($i = 0; $i < 5; $i++) {
    echo $i . "\n";
}
echo "\n";

// while loop
while ($i < 10) {
    echo $i . "\n";
    $i++;
}
echo "\n";

// do-while loop
do {
    echo $i . "\n";
    $i++;
} while ($i < 15);
echo "\n";

// for-each loop
$fruits = array("apple", "banana", "cherry");
foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}

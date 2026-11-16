<?php

// Reading the entire File as a String
$content = file_get_contents('example.txt');
echo $content;
echo "\n";

file_put_contents('example.txt', 'New content'); // Overwrite the file with new content
echo file_get_contents('example.txt');
echo "\n";

file_put_contents('example.txt', "\nappend data", FILE_APPEND);
echo file_get_contents('example.txt');
echo "\n";
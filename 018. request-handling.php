<?php

// $GLOBALS Superglobal

$x = 75; // global variable

function myFunction() {
    global $x; // or $GLOBALS['x']
    $x = $x + 10;
}

myFunction();
echo "Value of x: $x";
echo "\n";



// $_SERVER Superglobal

$server = $_SERVER;
print_r($server);

//echo $_SERVER['PHP_SELF'];
//echo $_SERVER['SERVER_NAME'];
//echo $_SERVER['HTTP_HOST'];
//echo $_SERVER['HTTP_REFERER'];
//echo $_SERVER['HTTP_USER_AGENT'];
//echo $_SERVER['SCRIPT_NAME'];



// Handling Form Submission

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);

    if (!$email) {
        echo "Invalid email address.";
    } else {
        echo "Form submitted successfully.";
    }
}



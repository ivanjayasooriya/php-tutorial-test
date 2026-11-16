<?php

// Sessions
session_start();

$_SESSION['user_Id'] = 123;
//echo $_SESSION['user_Id'] ?? "Not logged in";

session_destroy();



// Cookies
setcookie('theme', 'dark', time() + 3600, '/');
echo $_COOKIE['theme'] ?? "light";
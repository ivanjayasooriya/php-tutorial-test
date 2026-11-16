<?php

# Password Hashing
$hash = password_hash('password', PASSWORD_DEFAULT); // use bcrypt - auto salt

$isValid = password_verify('password', $hash);



// Preventing XSS (Cross-site Scripting)
$cleanedInput = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');



// CSRF Protection
$token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $token;

echo '<input type="hidden" name="csrf_token" value="' . $_SESSION['csrf_token'] . '">';

if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'] ?? '')) {
    die('Invalid CSRF token');
}


<?php

// Connecting & Prepared Statements
$username = 'root';
$password = 'mysql';

$userInput = 'example@example.com';

$pdo = new PDO('mysql:host=localhost;dbname=mydatabase', $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute(['email' => $userInput]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);



// Inserting Data
$stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
$stmt->execute(['name' => 'Ivan', 'email' => 'ivan@gmail.com']);

$newId = $pdo->lastInsertId();
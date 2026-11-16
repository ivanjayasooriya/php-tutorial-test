<?php

// Union & Nullable Types
function process(int|string $id): void {}

function findUser(?int $id): ?User { // int|null
    return null;
}



// Nullsafe Operator
$order = null;

$city = $order?->customer?->address?->city;



// First-Class Callable (...)
$products = [
    ['name' => 'Mouse',    'price' => 25],
    ['name' => 'Monitor',  'price' => 300],
    ['name' => 'Keyboard', 'price' => 75],
];

// 1. Your function is already defined somewhere
function isExpensive(array $item): bool {
    return $item['price'] >= 50;
}

// 2. Pass it cleanly using first-class callable syntax
$expensive = array_filter($products, isExpensive(...)); // (...)

// Result: Monitor ($300) and Keyboard ($75)



// Attributes - Structured Metadata
#[Route('/users/{id}', methods: ['GET'])]
public function getUser(int $id): User
{
    return new User();
}
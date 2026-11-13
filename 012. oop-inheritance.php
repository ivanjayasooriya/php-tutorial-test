<?php

// Inheritance
class Animal {
    public function __construct(protected string $name) {}

    public function speak(): string
    {
        return "The animal {$this->name} makes a sound.";
    }
}

class Dog extends Animal {
    public function speak(): string
    {
        return "Woof!";
    }
}

$dog = new Dog("Buddy");
echo $dog->speak();
echo "\n";

// calling parent method
class Cat extends Animal {
    public function speak(): string
    {
        return parent::speak() . " Meow!";
    }
}

$cat = new Cat("Tom");
echo $cat->speak();
echo "\n\n";


// abstract class
abstract class Shape {
    abstract public function calculateArea(): float;

    public function describe(): string
    {
        return "This shape has an area of " . $this->calculateArea();
    }
}

class Circle extends Shape {
    public function __construct(private float $radius) {}

    public function calculateArea(): float
    {
        return pi() * $this->radius ** 2;
    }
}

$circle = new Circle(5);
echo $circle->describe();


// interfaces
interface Payable {
    public function pay(float $amount): bool;
}

interface Refundable {
    public function refund(float $amount): bool;
}

class CreditCardProcessor implements Payable, Refundable {
    public function pay(float $amount): bool
    {
        // TODO: Implement pay() method.
        return true;
    }

    public function refund(float $amount): bool
    {
        // TODO: Implement refund() method.
        return true;
    }
}
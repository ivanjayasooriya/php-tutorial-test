<?php

// class
class User
{
    public string $name;
    public int $age;
    public string $password;

    public function __construct(string $name, int $age, string $password)
    {
        $this->name = $name;
        $this->age = $age;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function greet()
    {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

$user = new User("John", 30, "john1234");
$user->greet();
echo "\n";

// constructor property promotion
class Student {
    public function __construct(
        public string $name,
        public int $age,
        public string $password
    ) {}

    public function greet()
    {
        echo "Hello, my name is {$this->name} and I am {$this->age} years old.";
    }
}

$student = new Student("Jane", 25, "jane1234");
$student->greet();

// visibility
class Account {
    public string $username; // accessible from anywhere
    protected string $password; // accessible from child classes
    private string $email; // accessible only from within the class
}


































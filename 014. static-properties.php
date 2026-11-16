<?php

// Early Binding (self::) -> calls the class where the method is defined
class Counter {
    public static int $count = 0;

    public static function increment(): void {
        self::$count++; // "self" is a keyword used to refer to the current class or object within a static context.
    }
}

Counter::increment(); // called on the class itself
echo Counter::$count;
echo "\n";


// Late Static Binding (static::) -> calls the class where the method is called at runtime
class Model {
    protected static string $table = 'models';

    public static function getTable(): string {
        return static::$table; // resolves to the calling class at runtime
    }

    public static function createSelf(): self
    {
        return new self(); // creates an instance of the class where the method is defined
    }

    public static function createStatic(): static
    {
        return new static(); // creates an instance of the class where the method is called at runtime
    }
}

class User extends Model {
    protected static string $table = 'users';
}

echo User::getTable();
echo "\n";

$user = User::createSelf();
echo var_dump($user);
echo "\n";

$user = User::createStatic();
echo var_dump($user);

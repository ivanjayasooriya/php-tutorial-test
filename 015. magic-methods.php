<?php

class Container
{
    private array $data = [];

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __call($name, $args)
    {
        return "Called $name with " . count($args) . " args";
    }

    public function __toString(): string
    {
        return "Container with " . count($this->data) . " items";
    }

    public function __destruct() {
        echo "Container destroyed";
    }
}

// __construct
// __destruct
// __get / __set
// __call / __callStatic
// __toString
// __invoke
// __clone

$container = new Container();
$container->foo = "bar";
echo $container->foo;
echo $container->baz;
echo $container->toString();
echo $container->call("hello", "world");
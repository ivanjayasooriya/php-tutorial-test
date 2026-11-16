<?php

trait Loggable {
    public function log(string $message): void {
        echo "[LOG] " . static::class . ": " . $message;
    }
}

//trait TimeStampable {
//    public function touch(): void {
//        $this->updateAt = new DateTime();
//    }
//}

class Order {
//    use Loggable, TimeStampable;
    use Loggable;
}

$order = new Order();
$order->log("Order created");
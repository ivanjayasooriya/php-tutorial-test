<?php

try {
    $result = intdiv(10, 0); // throws DivisionByZeroError

} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
    echo "\n";

} catch (Exception $e) {
    echo "An unexpected error occurred: " . $e->getMessage();
    echo "\n";

} finally {
    echo "Execution completed.";
    echo "\n\n";
}


// Custom Exceptions
class InsufficientFundsException extends Exception {
    public function __construct(private float $balance, private float $requested)
    {
        parent::__construct("Cannot withdraw $requested. Balance is $balance.");
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

function withdraw(float $balance, float $amount): float {
    if ($amount > $balance) {
        throw new InsufficientFundsException($balance, $amount);
    }

    return $balance - $amount;
}

$balance = 100.0;
$amount = 150.0;
try {
    $balance = withdraw($balance, $amount);
    echo "Withdrawal successful. New balance: $balance\n";

} catch (InsufficientFundsException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
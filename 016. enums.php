<?php

enum Status: string {
    case Active = "active";
    case Inactive = "inactive";
    case Pending = "pending";

    public function label(): string // enums can have methods
    {
        return match ($this) {
            self::Active => "Currently Active",
            self::Inactive => "Not Active",
            self::Pending => "Awaiting Approval",
        };
    }
}

$status = Status::Active;
echo $status->value;
echo "\n";

echo $status->label();
<?php


namespace Data;

interface hasBrand
{
    function hasBrand(): string;
}
interface isMaintenance
{
    function isMaintenance(): bool;
}
interface Car extends hasBrand
{
    function drive();
    function getTire();
}

class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }
    public function getTire(): int
    {
        return 4;
    }
    public function hasBrand(): string
    {
        return 'Toyota';
    }
    public function isMaintenance(): bool
    {
        return false;
    }
}

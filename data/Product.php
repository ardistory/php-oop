<?php

class Product
{
    private string $name;
    private int $price;

    public function __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name . PHP_EOL;
    }
    public function getPrice()
    {
        return $this->price . PHP_EOL;
    }
}

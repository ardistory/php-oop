<?php

interface sayHello
{
    public function sayHello(): void;
}

$anonymousClass = new class("Ardi") implements sayHello
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "halo $this->name";
    }
};
var_dump($anonymousClass->name);
$anonymousClass->sayHello();

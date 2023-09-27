<?php

class magicFunction
{
    public string $namef;
    public function __get($name)
    {
        echo "Access property $name";
        return "Contoh";
    }
    public function __set($name, $value)
    {
        echo "this access name $name, and value $value";
    }
}

$magic = new magicFunction();
$magic->pablof = "Ardi";

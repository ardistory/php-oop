<?php
class Manager
{
    var string $name;
    var string $title;
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name)
    {
        echo "hay $name, my name is Manager $this->name" . PHP_EOL;
    }
    public function getCorner()
    {
        return -1;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    function sayHello(string $name)
    {
        echo "hay $name, my name is VP $this->name" . PHP_EOL;
    }
    public function getCorner()
    {
        return parent::getCorner();
    }
}

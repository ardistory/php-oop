<?php

class Person
{
    const AUTHOR = "Snorlax";
    var string $name;
    var string $alamat = "Rangkasbitung";
    var int $umur;
    var ?string $hoby;

    function __construct(string $name, ?string $alamat)
    {
        $this->name = $name;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "author nya adalah " . self::AUTHOR;
    }

    function __destruct()
    {
        echo "Program ditutup oleh destruct, selamat tinggal $this->name";
    }
}

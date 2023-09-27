<?php

class programmer
{

    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
class frontEndProgrammer extends programmer
{
}
class backEndProgrammer extends programmer
{
}

class company
{
    public programmer $programmer;
    public function sayHelloProgrammer(programmer $programmer)
    {
        echo "nama saya $programmer->name";
    }
}

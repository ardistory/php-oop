<?php

class Data
{
    public array $properties = [];

    public function __get($name)
    {
        echo $name;
    }
}

$data = new Data;
$data->noExistProperty;

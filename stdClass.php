<?php

$array = [
    "firstName" => "Ardiansyah",
    "lastName" => "Putra"
];

$object = (object)$array;
echo "First Name : {$object->firstName}" . PHP_EOL;
echo "Last Name : {$object->lastName}" . PHP_EOL;

$arrayLagi = (array)$object;
var_dump($arrayLagi);

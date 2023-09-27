<?php

require_once 'data/Person.php';


$person = new Person("Ardi", null);
$person->name = "Ardi";
$person->umur = 21;
$person->hoby = null;
$person->sayHello("Warjo");
echo Person::AUTHOR . PHP_EOL;
$person->info();

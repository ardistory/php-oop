<?php

require_once 'data/trait.php';

use Data\Traits\{sayGoodbye, sayHello, Personil};

$person = new Personil();
$person->sayGoodbye("warjo");
$person->sayHello("ardi");
$person->name = "Ardi Putra";
$person->run();

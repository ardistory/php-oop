<?php

require_once 'data/car.php';

use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo $car->getTire();

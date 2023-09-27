<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = "Warjo";
$manager->sayHello("Ardi");
$manager->getCorner();
var_dump($manager->getCorner());
$vp = new VicePresident("wrojjo");
$vp->name = "Wartono";
$vp->sayHello("Wartini");
var_dump($vp->getCorner());

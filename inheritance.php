<?php

require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = "Warjo";
$manager->sayHello("Ardi");

$vp = new VicePresident();
$vp->name = "Wartono";
$vp->sayHello("Wartini");

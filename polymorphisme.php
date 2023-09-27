<?php

require_once 'data/programmer.php';

$company = new company();
$company->programmer = new programmer("Ardi");
$company->sayHelloProgrammer(new programmer("Ardi"));

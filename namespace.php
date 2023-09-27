<?php

require_once 'data/conflict.php';

$conflict1 = new Data\One\conflict;
$conflict1->namaku("Ardi");
$conflict2 = new Data\Two\conflict;
$conflict2->name = "Wartono";
$conflict2->namaku(null);

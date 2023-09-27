<?php



require_once 'data/conflict.php';
require_once 'data/helper.php';

use Data\One\{conflict as conflict1, dummy as dump, sample};
use Data\Two\conflict as conflict2;
use function helper\Wardrobe as war;
use const helper\HELPME as HELP;

$conflict1 = new conflict1;
$conflict1->namaku("ardi");
$dummy = new dump();
$sample = new sample();
$conflict2 = new conflict2;
$conflict2->name = "Wartono";
$conflict2->namaku(null);
war();
echo HELP;

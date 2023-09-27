<?php

require_once 'data/Handphone.php';

$HP = new Handphone();
$HP->setName("POCO X3 GT");
$HP->setName(" ");
echo "HP : {$HP->getName()}" . PHP_EOL;

$HP->setExpensive(true);
echo "Is Expensive : {$HP->isExpensive()}" . PHP_EOL;

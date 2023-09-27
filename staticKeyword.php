<?php

require_once 'helper/mathHelper.php';

use Data\static\{mathHelper};

echo mathHelper::$name = "Ardi" . PHP_EOL;
$result =  mathHelper::jumlah(10, 10, 10, 10, 10);

var_dump($result);

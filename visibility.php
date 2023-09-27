<?php

require_once 'data/Product.php';

$product = new Product("Apple", 3000);
echo $product->getName();
echo $product->getPrice();

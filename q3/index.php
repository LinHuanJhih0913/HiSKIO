<?php

require 'vendor/autoload.php';

$product = new Product();

$product->attach(new Pchome());
$product->attach(new Yahoo());
$product->attach(new Ruten());
$product->attach(new Shopee());

$product->detach(new Pchome());

$product->publish(" 已收到商品發佈\n");

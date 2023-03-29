<?php

use App\Advanced\Product;
use App\Advanced\ShoppingOrder;
use App\Advanced\ShippingOrderDIContainer;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../vendor/autoload.php");

$product = new Product('Apple',3,5.5,0.01);
echo '<pre>';
var_dump($product);
//$order = new ShoppingOrder($product->productName,$product->productPrice,5);

$order = new ShoppingOrder(2);
$order->setProduct($product);
echo '<pre>';
echo '<pre>';
echo '<pre>';
var_dump($order);


// DI Container

$container = new ShippingOrderDIContainer(array(
    'name' => 'Apple',
    'quantity' => 3,
    'price' => 3.3,
    'tax' => 0.1,
    'orderNumber' => 2,
));

$shippingOrder = $container->createShippingOrder($container->createProduct());

echo '<pre>';
echo '<pre>';
var_dump($shippingOrder);
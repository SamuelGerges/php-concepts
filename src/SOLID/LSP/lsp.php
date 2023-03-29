<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");


use App\SOLID\LSP\Rectangle;
use App\SOLID\LSP\Square;

//$rectangle = new Rectangle();
$rectangle = new Square();


$rectangle->setWidth(4);
$rectangle->setHeight(6);

echo $rectangle->calculateArea();


function f(Rectangle $rect)
{
    if ($rect instanceof Square) {
        if ($rect->calculateArea() !== 36) {
            echo ' There is Some Wrong';
        }
    } else {
        if ($rect->calculateArea() !== 24) {
            echo ' There is Some Wrong';
        }
    }
}

f($rectangle);
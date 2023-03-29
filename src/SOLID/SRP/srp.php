<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");


use App\SOLID\SRP\Bus;
use App\SOLID\SRP\Driver;
use App\SOLID\SRP\Route;

$driver1 = new Driver('Samuel',22,234,'cairo');
$route80 = new Route('Cairo','Alex',33);
$route90 = new Route('Alex','Cairo',43);
$bus = new Bus(201);

$bus->setBusNumber(22);
$bus->setNumberOfPassenger(33);
$bus->setColor('Red');
$bus->setDriver($driver1);
$bus->setMaximumSpeed(120);
$bus->setDoors(2);
$bus->setRoute($route80);
$bus->setRoute($route90);
echo '<pre>';
//var_dump($bus);


echo $bus->move();
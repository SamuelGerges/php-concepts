<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");

use App\SOLID\ISP\Car;
use App\SOLID\ISP\Bus;
use App\SOLID\ISP\Truck;


$car = new Car();
echo $car->move();
echo $car->stop();
echo $car->accelerate();
echo $car->musicPlay();
echo $car->pause();
echo $car->rewind();

$bus = new Bus();
echo $bus->move();
echo $bus->stop();

$truck = new Truck();
echo $truck->move();
echo $truck->stop();
echo $truck->carryHeavyCargo();
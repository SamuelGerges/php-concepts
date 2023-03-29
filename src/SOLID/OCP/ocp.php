<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");


use App\SOLID\OCP\Bus;
use App\SOLID\OCP\Driver;
use App\SOLID\OCP\Route;
use App\SOLID\OCP\Trip;
use App\SOLID\OCP\Car;
use App\SOLID\OCP\Plane;
use App\SOLID\OCP\Ship;
use App\SOLID\OCP\MoveOnTheRoads;
use App\SOLID\OCP\MoveOverWaves;
use App\SOLID\OCP\FlyingInTheSky;


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
$bus->setMove(new MoveOnTheRoads());
echo '<pre>';
//var_dump($bus);


$trip = new Trip($bus,'201K',33.04,2);

echo $trip->move();


$car = new Car();
$car->setColor('Red');
$car->setMaximumSpeed(120);
$car->setDriver($driver1);
$car->setRoute($route80);
$car->setRoute($route90);
$car->setMove(new MoveOnTheRoads());
echo '<pre>';
//var_dump($car);


$trip2 = new Trip($car,'203Kl',343.04,2);

echo $trip2->move();


$plane = new plane();
$plane->setColor('Red');
$plane->setMaximumSpeed(120);
$plane->setDriver($driver1);
$plane->setRoute($route80);
$plane->setRoute($route90);
$plane->setMove(new FlyingInTheSky());
echo '<pre>';
//var_dump($plane);


$trip3 = new Trip($plane,'203Kl',343.04,2);

echo $trip3->move();

$ship = new Ship();
$ship->setColor('Red');
$ship->setMaximumSpeed(120);
$ship->setDriver($driver1);
$ship->setRoute($route80);
$ship->setRoute($route90);
$ship->setMove(new MoveOverWaves());
echo '<pre>';
//var_dump($ship);


$trip3 = new Trip($ship,'203Kl',343.04,2);

echo $trip3->move();
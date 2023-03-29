<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");

use App\OOP\Abstraction\Microwave;
use App\OOP\Abstraction\BMW;
use App\OOP\Abstraction\Mercedes;
use App\OOP\Abstraction\Order;
use App\OOP\Abstraction\TruckXT;

$microwave = new Microwave(90, 'DE1', 30);
echo '<pre>';
if ($microwave->turnOn()) {
    echo $microwave->deFreeze();
}
if (!$microwave->turnOff())
    echo $microwave->deFreeze();

echo '<pre>';

$bmw = new BMW(220, 2, 'Black', 'FRONT');
echo $bmw->move();

echo '<pre>';

$mercedes = new Mercedes(220, 2, 'White', 'BACK');
echo $mercedes->move();


echo '<pre>';

$truck = new TruckXT(120, 2, 'Black', 'Carry Goods');
echo $truck->move();
echo '<pre>';

$order1 = new Order('Cairo','Alex',200);
echo $order1->deliverOrder($bmw);

echo '<pre>';

$order2 = new Order('Aswan','Cairo',600);
echo $order2->deliverOrder($mercedes);

echo '<pre>';
$order3 = new Order('Bur Saied','Cairo',600);
echo $order3->deliverOrder($truck);
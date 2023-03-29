<?php


use App\OOP\Relationship\Composition\House;
use App\OOP\Relationship\Composition\Room;
use App\OOP\Relationship\Composition\CPU;
use App\OOP\Relationship\Composition\RAM;
use App\OOP\Relationship\Composition\ComputerMachine;


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../../vendor/autoload.php");


$room1 = new Room('White', 30);
$room2 = new Room('LightGray', 40);
$room3 = new Room('LightBlue', 50);

$house = new House([$room1, $room2, $room3]);


$cpu  = new CPU(3.6);
$ram = new RAM(16);
$computer = new  ComputerMachine($ram,$cpu);


echo $computer->dashboard();


// Inheritance IS-A  =>  manager  ia a employee
// Aggregation HAS-A    ==> project has a developers| team member
// Composition PART-OF   => cpu part of Computer machine
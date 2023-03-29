<?php


use App\OOP\Polymoriphism\Employee;
use App\OOP\Polymoriphism\Salary;
use App\OOP\Polymoriphism\OrganizationSalary;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");


$ahmedSalary = new OrganizationSalary(6000,0.2,2,30,75,20,0.1);
$ahmed = new Employee('Samuel',23,$ahmedSalary);


echo '<pre>';
var_dump($ahmed);

echo '<pre>';

echo $ahmed->getSalary()->calculate();
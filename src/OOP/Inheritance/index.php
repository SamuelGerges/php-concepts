<?php

use App\OOP\Inheritance\Employee;
use App\OOP\Inheritance\HTTPClient;
use App\OOP\Inheritance\Salary;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");

$http = new HTTPClient('web', 22);

echo $http->connect();
echo '<pre>';

echo $http->call('/users');
echo '<pre>';
echo $http->welcomeAfterConnect();
echo '<pre>';
if ($http->terminate())
    echo "True";
else
    echo "False";



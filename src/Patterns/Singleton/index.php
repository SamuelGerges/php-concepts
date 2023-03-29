<?php

use App\Patterns\Singleton\AppSetting;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../vendor/autoload.php");


//$setting = new AppSetting(); // fatal error because the constructor is private and can not create instance from class


$setting = AppSetting::getInstance();
//$setting3 = clone $setting;
//var_dump($setting3);
echo '<pre>';
var_dump($setting::getConfig('Database')['portNumber']);
var_dump($setting::getConfig('Cache'));

$setting2 = AppSetting::getInstance();
echo '<pre>';
var_dump($setting,$setting2);

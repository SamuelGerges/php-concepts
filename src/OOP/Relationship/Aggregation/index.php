<?php


use App\OOP\Relationship\Aggregation\Developer;
use App\OOP\Relationship\Aggregation\Project;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("../../../../vendor/autoload.php");


$ayman = new Developer("Ayman");
$mohamed = new Developer("Mohamed");
$ali = new Developer("Ali");


$xProject = new Project("X-Project", new DateTime('now'), [$ayman, $mohamed, $ali]);

$xProject->setDeadLineTp(new DateInterval('P1M'));

echo '<pre>';

var_dump($xProject);
echo '<pre>';
echo $xProject->showProjectInformation();
<?php


use App\OOP\Relationship\Association\Printer\HtmlPrinter;
use App\OOP\Relationship\Association\Student;
use App\OOP\Relationship\Association\ScienceTeacher;
use App\OOP\Relationship\Association\MathTeacher;

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once("../../../../vendor/autoload.php");


$samuel = new MathTeacher("Samuel gerges");
$ibra = new ScienceTeacher("Ibrahim Hassan");
$printer = new HtmlPrinter();
echo $samuel->sayWelcome($printer);

//unset($samuel);
echo '<pre>';
$printer->setStringToBePrinted('this is a test string');
echo $printer->printToScreen();

echo '<pre>';
echo '<pre>';
echo '<pre>';
$sam = new Student('Sam Ayman');
echo $sam->assignATempTeacher($samuel);
echo 'Sam was assigned this by ' . $samuel->getName() . ' | ' . $samuel->evaluateHomeWorkScore($sam);

echo '<pre>';

echo $sam->assignATempTeacher($ibra);
echo 'Sam was assigned this by ' . $ibra->getName() . ' | ' . $ibra->evaluateHomeWorkScore($sam);
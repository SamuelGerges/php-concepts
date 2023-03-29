<?php

namespace App\OOP\Relationship\Association;

use App\OOP\Relationship\Association\Printer\Printer;

abstract class Teacher
{

    protected string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }



    public function sayWelcome(Printer $printer): string
    {
        $printer->setStringToBePrinted($this->name);
        return $printer->printToScreen();
    }

    abstract public function assignAHomeWork(): string;



    public function evaluateHomeWorkScore(Student $student)
    {
        if ($student->getHomeWorkScore() >= 50)
            return "Success";
        return "Failed";
    }
}
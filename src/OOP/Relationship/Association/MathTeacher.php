<?php

namespace App\OOP\Relationship\Association;

class MathTeacher extends Teacher
{

    public function assignAHomeWork(): string
    {
        return "calculate the sum 10 of 20";
    }
}
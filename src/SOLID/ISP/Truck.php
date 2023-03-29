<?php

namespace App\SOLID\ISP;

class Truck implements Vehicle, Heavy
{
    public function move()
    {
        // TODO: Implement move() method.
        return "<h1>I am moving</h1>";
    }

    public function stop()
    {
        // TODO: Implement stop() method.
        return "<h1>I stop the car in parking </h1>";
    }

    public function carryHeavyCargo()
    {
        // TODO: Implement carryHeavyCargo() method.
        return "<h1>I will carry heavy cargo of the car</h1>";
    }
}
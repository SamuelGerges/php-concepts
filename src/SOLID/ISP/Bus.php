<?php

namespace App\SOLID\ISP;

class Bus implements Vehicle
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

}
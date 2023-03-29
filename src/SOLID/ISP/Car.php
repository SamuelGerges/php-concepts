<?php

namespace App\SOLID\ISP;

class Car implements Vehicle,Entertainment, Speedable
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
    public function accelerate()
    {
        // TODO: Implement accelerate() method.
        return "<h1>I can move at a rate of 200 KM/H</h1>";
    }

    public function musicPlay()
    {
        // TODO: Implement musicPlay() method.
        return "<h1>I will turn on the music</h1>";
    }

    public function pause()
    {
        // TODO: Implement pause() method.
        return "<h1>I will pause of the music </h1>";
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        return "<h1>I am rewinding</h1>";
    }


}
<?php

namespace App\OOP\Abstraction;

class Mercedes extends Car
{

    public function move(): int
    {
        return $this->speed * 2;
    }

    public function turnOn(): bool
    {
        // 2 operation before turning on
        return $this->turnOn = true;
    }

    public function turnOff(): bool
    {
        // 1 operation before turning off
        return $this->turnOn;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed * 0.5 ;
        return true;
    }

    public function park(): bool
    {
        // 1 operation before parking
        return true;
    }
}
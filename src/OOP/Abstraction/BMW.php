<?php

namespace App\OOP\Abstraction;

class BMW extends Car
{

    public function move(): int
    {
        return $this->speed;
    }

    public function turnOn(): bool
    {
        return $this->turnOn = true;

    }

    public function turnOff(): bool
    {
        return $this->turnOn;
    }

    public function accelerate(int $speed): bool
    {
        $this->speed = $speed ;
        return true;
    }

    public function park(): bool
    {
        return true;
    }
}
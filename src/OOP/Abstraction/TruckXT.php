<?php

namespace App\OOP\Abstraction;

class TruckXT extends Car implements WeightHolder
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
        $this->speed = $speed;
        return true;
    }

    public function park(): bool
    {
        return true;
    }

    public function leftCargo(): bool
    {
        return "This is truck Carry Many Goods till 700 K.G";
    }

}
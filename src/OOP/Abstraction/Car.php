<?php

namespace App\OOP\Abstraction;

abstract class Car
{
    protected int $speed;
    protected int $numberOfDoors;
    protected string $color;
    protected string $gearboxSystem;

    protected bool $turnOn = false;

    private CarDashboard $dashboard;

    /**
     * @param int $speed
     * @param int $numberOfDoors
     * @param string $color
     * @param string $gearboxSystem
     */
    public function __construct(int $speed, int $numberOfDoors, string $color, string $gearboxSystem)
    {
        $this->speed = $speed;
        $this->numberOfDoors = $numberOfDoors;
        $this->color = $color;
        $this->gearboxSystem = $gearboxSystem;
    }


    public abstract function move(): int;

    public abstract function turnOn(): bool;

    public abstract function turnOff(): bool;

    public abstract function accelerate(int $speed): bool;

    public abstract function park(): bool;

    public function installDashboard(CarDashboard $dashboard)
    {
        $this->dashboard = $dashboard;
    }

    public function CarInfo(): string
    {
        if ($this->dashboard) {
            return "This Speed is $this->speed \n more info ... \n {$this->dashboard->readDashboard()}";
        } else {
            return "This Speed is $this->speed \n";
        }
    }
}
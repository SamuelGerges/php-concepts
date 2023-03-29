<?php

namespace App\SOLID\SRP;

class Bus
{

    protected int $busNumber;
    protected int $numberOfPassenger;
    protected string $color;
    protected int $maximumSpeed;

    protected Driver $driver;
    protected int $doors;
    protected array $route = [];

    /**
     * @param int $busNumber
     */
    public function __construct(int $busNumber)
    {
        $this->busNumber = $busNumber;

    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }


    /**
     * @return int
     */
    public function getNumberOfPassenger(): int
    {
        return $this->numberOfPassenger;
    }

    /**
     * @param int $numberOfPassenger
     */
    public function setNumberOfPassenger(int $numberOfPassenger): void
    {
        $this->numberOfPassenger = $numberOfPassenger;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }



    public function getMaximumSpeed()
    {
        return $this->maximumSpeed . 'K/H';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }



    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
    }

    /**
     * @return array
     */
    public function getRoute(): array
    {
        return $this->route;
    }

    /**
     * @param array $route
     */
    public function setRoute(Route $route): void
    {
        $this->route[] = $route;
    }


    public function driveToRoute($from, $to)
    {
        return 'The bus is moving from ' . $from . ' to ' . $to;
    }

    public function doMaintenance()
    {
        return 'the bus is doing maintenance right now ';
    }
    public function move()
    {
        $output = '';
        foreach ($this->getRoute() as $route){
            $output=  "<h2>I am moving from {$route->getSource()} to {$route->getDestination()} ".
                "at maximum speed {$this->getMaximumSpeed()} the driver is : {$this->getDriver()->getName()}</h2>";
        }
        return $output;
    }

}
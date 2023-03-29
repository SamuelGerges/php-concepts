<?php

namespace App\SOLID\OCP;

abstract class Vehicle implements IVehicle
{

    private IMove $move;
    private string $color;
    private int $maximumSpeed;
    private Driver $driver;
    private  $route = [];

    /**
     * @return IMove
     */
    public function getMove(): IMove
    {
        return $this->move;
    }

    /**
     * @param IMove $move
     */
    public function setMove(IMove $move): void
    {
        $this->move = $move;
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
    public function move(): string
    {
        // TODO: Implement move() method.
        return $this->getMove()->move();
    }

}
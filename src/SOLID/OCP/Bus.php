<?php

namespace App\SOLID\OCP;

class Bus extends Vehicle
{

    private int $busNumber;
    private int $numberOfPassenger;
    private int $doors;


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




}
<?php

namespace App\OOP\Abstraction;

class CarDashboard
{
    protected int $oilLevel;
    protected int $fuelLevel;
    protected int $airPressure;

    /**
     * @return int
     */
    private function getOilLevel(): int
    {
        return $this->oilLevel;
    }

    /**
     * @return int
     */
    private function getFuelLevel(): int
    {
        return $this->fuelLevel;
    }

    /**
     * @return int
     */
    private function getAirPressure(): int
    {
        return $this->airPressure;
    }


    public function readDashboard(): string
    {
        return "Showing the following analysis : \n
            Fuel : {$this->getFuelLevel()} \n
            Oil : {$this->getOilLevel()}  \n
            Air Pressure : {$this->getAirPressure() } \n
        ";
    }


}
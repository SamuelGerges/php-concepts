<?php

namespace App\OOP\Abstraction;

class Microwave
{


    private int $temp;
    private string $program;
    private int $time;
    private bool $status = false;

    /**
     * @param int $temp
     * @param string $program
     * @param int $time
     */
    public function __construct(int $temp, string $program, int $time)
    {
        $this->temp = $temp;
        $this->program = $program;
        $this->time = $time;
    }

    public function turnOn()
    {
        return $this->status = true;
    }

    public function turnOff()
    {
        return $this->status;
    }
    public function deFreeze()
    {
        $this->turnOnMicrowaveHeatingSystem();
        $this->loadingDeFreezingProgram();
        $this->setTimer();
        return "I am de-freezing the food at $this->temp using the program $this->program";
    }

    private function turnOnMicrowaveHeatingSystem()
    {
        return "Starting on Heating System";
    }

    private function loadingDeFreezingProgram()
    {
        return "loading program $this->program";
    }

    private function setTimer()
    {
        return "Setting de-freezing time to $this->time seconds";
    }


}
<?php

namespace App\OOP\Relationship\Composition;

class ComputerMachine
{

    private RAM $ram;
    private CPU $cpu;

    /**
     * @param RAM $ram
     * @param CPU $cpu
     */
    public function __construct(RAM $ram, CPU $cpu)
    {
        $this->ram = $ram;
        $this->cpu = $cpu;
    }

    public function dashboard(): string
    {
        return "My Machine's speed is {$this->cpu->getSpeed()} GHZ and RAM is {$this->ram->getSize()} GB";
    }


}
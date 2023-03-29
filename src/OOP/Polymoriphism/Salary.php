<?php

namespace App\OOP\Polymoriphism;

class Salary
{

    protected float $salary;
    protected float $tax;
    protected int $absent;
    protected int $overTime;
    protected int $overTimeRate;
    protected int $absenceRate;

    /**
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $overTime
     * @param int $overTimeRate
     * @param int $absenceRate
     */
    public function __construct(float $salary, float $tax, int $absent, int $overTime, int $overTimeRate, int $absenceRate)
    {
        $this->salary = $salary;
        $this->tax = $tax;
        $this->absent = $absent;
        $this->overTime = $overTime;
        $this->overTimeRate = $overTimeRate;
        $this->absenceRate = $absenceRate;
    }

    public function calculate(): float
    {
        return $this->salary - ($this->salary * $this->tax);
    }

}
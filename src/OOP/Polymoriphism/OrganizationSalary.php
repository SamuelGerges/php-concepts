<?php

namespace App\OOP\Polymoriphism;

class OrganizationSalary extends Salary
{


    protected float $organizationTax;

    /**
     * @param float $salary
     * @param float $tax
     * @param int $absent
     * @param int $overTime
     * @param int $overTimeRate
     * @param int $absenceRate
     * @param float $organizationTax
     */
    public function __construct(float $salary, float $tax, int $absent, int $overTime, int $overTimeRate, int $absenceRate, float $organizationTax)
    {
        parent::__construct($salary, $tax, $absent, $overTime, $overTimeRate, $absenceRate);
        $this->organizationTax = $organizationTax;
    }

    public function calculate(): float
    {
        return $this->salary - ($this->salary * $this->tax) - ($this->salary *  $this->organizationTax);
    }

}
<?php

namespace App\OOP\Polymoriphism;

class Employee
{

    protected string $name;
    protected int $age;
    protected Salary $salary;

    /**
     * @param string $name
     * @param int $age
     * @param Salary $salary
     */
    public function __construct(string $name, int $age, Salary $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return Salary
     */
    public function getSalary(): Salary
    {
        return $this->salary;
    }





}
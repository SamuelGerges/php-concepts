<?php

namespace App\SOLID\SRP;

class Driver
{

    private string $name;
    private int $age;
    private int $insuranceNumber;
    private string $address;

    /**
     * @param string $name
     * @param int $age
     * @param int $insuranceNumber
     * @param string $address
     */
    public function __construct(string $name, int $age, int $insuranceNumber, string $address)
    {
        $this->setName($name) ;
        $this->setAge($age);
        $this->setInsuranceNumber($insuranceNumber);
        $this->setAddress($address);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return int
     */
    public function getInsuranceNumber(): int
    {
        return $this->insuranceNumber;
    }

    /**
     * @param int $insuranceNumber
     */
    public function setInsuranceNumber(int $insuranceNumber): void
    {
        $this->insuranceNumber = $insuranceNumber;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }



}
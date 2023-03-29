<?php

namespace App\OOP\Abstraction;

class Order
{

    private string $source;         // from
    private string $destination;    // to

    private int $weight;

    /**
     * @param string $source
     * @param string $destination
     * @param int $weight
     */
    public function __construct(string $source, string $destination, int $weight)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->weight = $weight;
    }


    public function deliverOrder(Car $car): string
    {
        $car->turnOn();
        $car->move();
        $car->accelerate(120);
        $car->park();
        $car->turnOff();
        if($car instanceof WeightHolder){
            $car->leftCargo();
        }
        return "I am moving from $this->source to $this->destination to deliver a package of $this->weight K.G";
    }
}
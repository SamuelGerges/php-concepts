<?php

namespace App\OOP\Relationship\Composition;

class House
{

    private array $rooms;

    /**
     * @param array $rooms
     */
    public function __construct(array $rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return array
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param array $rooms
     */
    public function setRooms(array $rooms): void
    {
        $this->rooms = $rooms;
    }



}
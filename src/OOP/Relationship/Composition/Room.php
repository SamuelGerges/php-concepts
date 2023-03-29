<?php

namespace App\OOP\Relationship\Composition;

class Room
{

    private string $color;
    private int $size;

    /**
     * @param string $color
     * @param int $size
     */
    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }




}
<?php

namespace App\OOP\Relationship\Composition;

class RAM
{


    private int $size;

    /**
     * @param int $size
     */
    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }



}
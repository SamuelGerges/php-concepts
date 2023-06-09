<?php

namespace App\SOLID\LSP;
class Rectangle
{

    protected int $height;
    protected int $width;


    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }


    /**
     * Calculate area of the rectangle
     * @return int
     */
    public function calculateArea(): int
    {
        return $this->getWidth() * $this->getHeight();
    }


}
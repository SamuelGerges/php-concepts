<?php

namespace App\OOP\Relationship\Association\Printer;

abstract class Printer
{
    protected string $stringToBePrinted;

    /**
     * @param string $stringToBePrinted
     */
    public function setStringToBePrinted(string $stringToBePrinted): void
    {
        $this->stringToBePrinted = $stringToBePrinted;
    }


    abstract public function printToScreen(): string;

}
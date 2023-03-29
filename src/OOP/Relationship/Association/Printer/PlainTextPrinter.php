<?php

namespace App\OOP\Relationship\Association\Printer;

class PlainTextPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "THis is a PlainText Format of the String : $this->stringToBePrinted<";
    }
}
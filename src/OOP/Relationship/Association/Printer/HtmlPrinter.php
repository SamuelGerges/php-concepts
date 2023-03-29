<?php

namespace App\OOP\Relationship\Association\Printer;

class HtmlPrinter extends Printer
{

    public function printToScreen(): string
    {
        return "<h1>This is a Html Format of the String : $this->stringToBePrinted</h1>";
    }
}
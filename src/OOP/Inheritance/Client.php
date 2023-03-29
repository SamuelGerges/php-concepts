<?php

namespace App\OOP\Inheritance;

class Client
{

    protected string $source;
    protected int $timeout;

    /**
     * @param string $source
     * @param int $timeout
     */
    public function __construct(string $source, int $timeout)
    {
        $this->source = $source;
        $this->timeout = $timeout;
    }


    public function connect(): string
    {
        return "I am connection to $this->source";
    }

    public function call(string $url)
    {
        return "I have fetched this data for Date";
    }

    public function terminate(): bool
    {
        return true;
    }

    public function welcomeAfterConnect()
    {
        return $this->connect() . " an extra welcome message to $this->source";
    }
}
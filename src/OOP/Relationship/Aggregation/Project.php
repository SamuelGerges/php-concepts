<?php

namespace App\OOP\Relationship\Aggregation;

class Project
{

    private string $name;
    private \DateTime $deadLinde;
    private array $developers;

    /**
     * @param string $name
     * @param \DateTime $deadLinde
     * @param array $developers
     */
    public function __construct(string $name, \DateTime $deadLinde, array $developers)
    {
        $this->name = $name;
        $this->deadLinde = $deadLinde;
        $this->developers = $developers;
    }

    public function setDeadLineTp(\DateInterval $interval)
    {
        $this->deadLinde->add($interval);
    }

    public function showProjectInformation(): string
    {

        $developerList = array_map(function (Developer $dev) {
            return $dev->getName();
        }, $this->developers);
        $developers = implode(',', $developerList);
        return "
            Project Name : $this->name \n
            Project DeadLine : {$this->deadLinde->format('Y-m-d')} \n
            Project Developers : $developers \n
        ";
    }

}
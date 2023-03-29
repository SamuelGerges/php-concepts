<?php

namespace App\OOP\Relationship\Association;

use App\OOP\Relationship\Association\Printer\Printer;

class Student
{

    private string $name;
    private string $homeWork;
    private int $homeWorkScore = 50;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param int $homeWorkScore
     */
    public function setHomeWorkScore(int $homeWorkScore): void
    {
        $this->homeWorkScore = $homeWorkScore;
    }

    /**
     * @return int
     */
    public function getHomeWorkScore(): int
    {
        return $this->homeWorkScore;
    }


    public function assignATempTeacher(Teacher $teacher)
    {
         $this->homeWork = $teacher->assignAHomeWork();
    }

    public function doHomeWork()
    {
        return $this->setHomeWorkScore(60);
    }



}
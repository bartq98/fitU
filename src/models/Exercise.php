<?php


class Exercise
{
    private $id;
    private $name;
    private $muscle;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getMuscle()
    {
        return $this->muscle;
    }

    public function setMuscle($muscle): void
    {
        $this->muscle = $muscle;
    }

}
<?php


class UserDetails
{
    private $id;
    private $name;
    private $surname;
    private $calorie_intake;

    public function __construct($id, $name, $surname, $calorie_intake)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->calorie_intake = $calorie_intake;
    }

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

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    public function getCalorieIntake()
    {
        return $this->calorie_intake;
    }

    public function setCalorieIntake($calorie_intake): void
    {
        $this->calorie_intake = $calorie_intake;
    }

}
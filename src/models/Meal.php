<?php


class Meal
{
    private $id;
    private $name;
    private $carbohydrate;
    private $fat;
    private $protein;
    private $allergens;
    private $portion_size;

    public function __construct($id, $name, $carbohydrate, $fat, $protein, $allergens, $portion_size)
    {
        $this->id = $id;
        $this->name = $name;
        $this->carbohydrate = $carbohydrate;
        $this->fat = $fat;
        $this->protein = $protein;
        $this->allergens = $allergens;
        $this->portion_size = $portion_size;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCarbohydrate()
    {
        return $this->carbohydrate;
    }

    public function setCarbohydrate($carbohydrate)
    {
        $this->carbohydrate = $carbohydrate;
    }

    public function getFat()
    {
        return $this->fat;
    }

    public function setFat($fat)
    {
        $this->fat = $fat;
    }

    public function getProtein()
    {
        return $this->protein;
    }

    public function setProtein($protein)
    {
        $this->protein = $protein;
    }

    public function getAllergens()
    {
        return $this->allergens;
    }

    public function setAllergens($allergens)
    {
        $this->allergens = $allergens;
    }

    public function getPortionSize()
    {
        return $this->portion_size;
    }

    public function setPortionSize($portion_size)
    {
        $this->portion_size = $portion_size;
    }

}
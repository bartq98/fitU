<?php

require_once "Repository.php";
require_once __DIR__."/../models/Meal.php";


class MealRepository extends Repository
{
    public function getMeal(string $name)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.meals WHERE name = :name
        ');

        $stmt->bindParam(':name', $name);
        $stmt->execute();

        $meal = $stmt->fetchObject(Meal::class);

        return $meal;

    }

}
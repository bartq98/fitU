<?php

require_once 'AppController.php';

class MealController extends AppController
{

    public function meals()
    {
        $mealrepository = 0;
        $this->render('meal', ["message" => "Meals"]);
    }

    public function mealshistory()
    {
        $this->render('workout');
    }

}
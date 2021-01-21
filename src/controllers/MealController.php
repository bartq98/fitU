<?php

require_once 'AppController.php';

class MealController extends AppController
{

    public function meals()
    {

        $this->render('meal', ["message" => "Meals"]);
    }



}
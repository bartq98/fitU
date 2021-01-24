<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/BodyweightHistory.php';
require_once __DIR__.'/../repository/BodyweightRepository.php';
require_once __DIR__.'/../security/Guard.php';

class WeightController extends AppController
{
    public function weight()
    {
        $wr = new BodyweightRepository();
        $wagi = $wr->getBodyweightHistory(Guard::getId());
        $this->render('weight', ['weights' => [$wagi]]);
    }

    public function getUserWeight($user_id)
    {
        return 0;
    }

}
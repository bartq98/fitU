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

    public function getUserWeight()
    {

        $wr = new BodyweightRepository();
        $wagi = $wr->getBodyweightHistoryJSON();

        header('Content-type: application/json');
        http_response_code(200);

        echo json_encode($wagi);
    }

    public function addUserWeight()
    {
        $userId = Guard::getId();
        $weightToAdd = $_POST['weight'];
        $wr = new BodyweightRepository();
        $wr->addWeight($userId, $weightToAdd);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/weight");

    }

}
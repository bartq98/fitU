<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../security/Guard.php';


class InfoController extends AppController
{
    public function info()
    {
        $ur = new UserRepository();
        $user = $ur->getUserInfoByID(Guard::getId());
        $this->render('info', ["messages" => [$user["name"], $user["surname"], $user["calorie_intake"]]]);
    }

}
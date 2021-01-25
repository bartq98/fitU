<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class AdminController extends AppController
{
    public function adminPanel()
    {
        $ur = new UserRepository();
        $users = $ur->getAllUsers();
        $this->render('admin', ["messages" => Guard::getId()]);
    }

    public function info()
    {
        $ur = new UserRepository();
        $adminInfo = $ur->getUserInfoByID(Guard::getId());
        $this->render('admin', ["messages" => $adminInfo]);
    }


}
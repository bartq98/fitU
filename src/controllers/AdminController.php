<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class AdminController extends AppController
{
    public static function adminPanel()
    {
        $ur = new UserRepository();
        $users = $ur->getAllUsers();
        var_dump($users);
    }
}
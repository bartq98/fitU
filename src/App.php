<?php

require_once __DIR__ . '/security/Guard.php';
require_once __DIR__ . '/routing/Routing.php';

class App
{

    // used in index.php for doing basic stuff with each request
    //  - check if session has logged user
    //  - route user to provided path if possible using proper controller and action within it

    public static function run() : void
    {
        $app = new App();

        // check if session not exists
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $path = trim($_SERVER['REQUEST_URI'], '/');
        $path = parse_url($path, PHP_URL_PATH);
        $routing = new Routing();
        $routing->run($path, self::isCurrentUserAuth());

    }

    private static function isCurrentUserAuth() : bool
    {
        return Guard::isAuth();
    }


}
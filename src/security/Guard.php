<?php


class Guard
{
    CONST USER_SESSION_KEY = "__user";

    public static function getId()
    {
        if (self::isAuth()) {
            return $_SESSION[self::USER_SESSION_KEY];
        } else {
            // is there is not logged user this function
            // throws exception becasue gettingId there has no sense
            throw new Exception("User is not authorized and cannot get ID in session");
        }
    }

    public static function isAuth()
    {
        return isset($_SESSION[self::USER_SESSION_KEY]);
    }

    public static function auth($user_id)
    {
        // If in current session the below variable is set
        // it means that there is logged user
        $_SESSION[self::USER_SESSION_KEY] = $user_id;
    }

}
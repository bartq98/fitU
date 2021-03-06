<?php


class Guard
{
    CONST USER_SESSION_KEY = "__user";
    CONST USER_ROLE        = "__user_role";

    public static function getId()
    {
        if (self::isAuth()) {
            return $_SESSION[self::USER_SESSION_KEY];
        } else {
            throw new Exception("User is not authorized and cannot get ID in session");
        }
    }

    public static function getRole()
    {
        if (self::isAuth()) {
            return $_SESSION[self::USER_ROLE];
        } else {
            return 'not_logged_user';
        }
    }

    public static function isAuth()
    {
        return isset($_SESSION[self::USER_SESSION_KEY]);
    }

    public static function auth($user_id, $user_role)
    {
        $_SESSION[self::USER_SESSION_KEY] = $user_id;
        $_SESSION[self::USER_ROLE]        = $user_role;
    }

}
<?php


class Guard
{
    CONST USER_SESSION_KEY = "__user";

    public static function getId()
    {
        return $_SESSION[self::USER_SESSION_KEY];
    }

    public static function auth($user_id)
    {
        $_SESSION[self::USER_SESSION_KEY] = $user_id;
    }

}
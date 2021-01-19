<?php

require_once "Repository.php";
require_once __DIR__."/../models/User.php";

class UserRepository extends Repository
{

    public function getUser(string $email)
    {
        // stmt states for statement
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email 
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetchObject(User::class);
        return $user;

    }
}
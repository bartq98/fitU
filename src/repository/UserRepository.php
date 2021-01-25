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

    public function getUserInfoByID(string $id)
    {
        // stmt states for statement
        $stmt = $this->database->connect()->prepare('
            SELECT * 
            FROM public.users INNER JOIN public.users_details
            ON (public.users.id_user_details = public.users_details.id)
            WHERE public.users.id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $user;

    }

    public function getAllUsers()
    {
        // stmt states for statement
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users
        ');

        $stmt->execute();

        $user = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $user;

    }

}
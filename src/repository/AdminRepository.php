<?php

require_once "Repository.php";
require_once __DIR__."/../models/User.php";

class AdminRepository extends Repository
{
    public function getUsers()
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.userdetailswithmails;
        ');

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;

    }


}
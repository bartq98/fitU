<?php

require_once "Repository.php";
require_once __DIR__."/../models/BodyweightHistory.php";
require_once __DIR__."/../security/Guard.php";

class BodyweightRepository extends Repository
{

    public function getBodyweightHistory(string $id_user)
    {
        // stmt states for statement
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.bodyweights_history WHERE id_user = :id_user 
        ');

        $stmt->bindParam(':id_user', $id_user, PDO::PARAM_STR);
        $stmt->execute();

        $bodyweightHistory = $stmt->fetchAll(\PDO::FETCH_CLASS,BodyweightHistory::class);

        return $bodyweightHistory;

    }

    public function getBodyweightHistoryJSON()
    {
        // stmt states for statement
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.bodyweights_history WHERE id_user = :id_user 
        ');

        $loggedUserID = strval(Guard::getId());

        $stmt->bindParam(':id_user', $loggedUserID, PDO::PARAM_STR);
        $stmt->execute();

        return  $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


}
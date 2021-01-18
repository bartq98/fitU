<?php


class WorkoutHistory
{
    private $id;
    private $id_user;
    private $id_exercise;
    private $reps;
    private $weight;
    private $done_at;

    public function __construct($id, $id_user, $id_exercise, $reps, $weight, $done_at)
    {
        $this->id = $id;
        $this->id_user = $id_user;
        $this->id_exercise = $id_exercise;
        $this->reps = $reps;
        $this->weight = $weight;
        $this->done_at = $done_at;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getIdExercise()
    {
        return $this->id_exercise;
    }

    public function setIdExercise($id_exercise): void
    {
        $this->id_exercise = $id_exercise;
    }

    public function getReps()
    {
        return $this->reps;
    }

    public function setReps($reps): void
    {
        $this->reps = $reps;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getDoneAt()
    {
        return $this->done_at;
    }

    public function setDoneAt($done_at): void
    {
        $this->done_at = $done_at;
    }

}
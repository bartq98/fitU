<?php


class MealsHistory
{
    private $id;
    private $id_user;
    private $id_meal;
    private $eated_at;
    private $portions;

    public function __construct($id, $id_user, $id_meal, $eated_at, $portions)
    {
        $this->id = $id;
        $this->id_user = $id_user;
        $this->id_meal = $id_meal;
        $this->eated_at = $eated_at;
        $this->portions = $portions;
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

    public function getIdMeal()
    {
        return $this->id_meal;
    }

    public function setIdMeal($id_meal): void
    {
        $this->id_meal = $id_meal;
    }

    public function getEatedAt()
    {
        return $this->eated_at;
    }

    public function setEatedAt($eated_at): void
    {
        $this->eated_at = $eated_at;
    }

    public function getPortions()
    {
        return $this->portions;
    }

    public function setPortions($portions): void
    {
        $this->portions = $portions;
    }

}
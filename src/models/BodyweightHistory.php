<?php


class BodyweightHistory
{
    private $id;
    private $id_user;
    private $weight;
    private $measured_at;
    private $last_change;

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

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getMeasuredAt()
    {
        return $this->measured_at;
    }

    public function setMeasuredAt($measured_at): void
    {
        $this->measured_at = $measured_at;
    }

    public function getLastChange()
    {
        return $this->last_change;
    }

    public function setLastChange($last_change): void
    {
        $this->last_change = $last_change;
    }

}
<?

class User {

    private $id;
    private $email;
    private $password;
    private $enabled;
    private $created_at;
    private $id_user_details;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setEnabled($enabled): void
    {
        $this->enabled = $enabled;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getIdUserDetails()
    {
        return $this->id_user_details;
    }

    public function setIdUserDetails($id_user_details): void
    {
        $this->id_user_details = $id_user_details;
    }

}
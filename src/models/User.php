<?

class User {
    private $email;
    private $password;
    private $name;
    private $surname;

    public function __construct(string $email, string $password, string $name, string $surname) {
        $this->email = $email;
        $this->passowrd = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function getPassword(): string {
        return $this->Password;
    }

    public function setPassword(string $Password) {
        $this->Password = $Password;
    }


    public function getName(): string {
        return $this->Name;
    }

    public function setName(string $Name) {
        $this->Name = $Name;
    }

    public function getSurname(): string {
        return $this->Surname;
    }

    public function setSurname(string $Surname) {
        $this->Surname = $Surname;
    }

}
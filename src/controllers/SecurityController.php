<?

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';

class SecurityController extends AppController {

    public function login() {
        $user = new User("john@snow.com", "12345", "John", "Snow");

        if ($this->isGet()) {
            return $this->login('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["User with provided email not exists."]]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/workout");

    }

}
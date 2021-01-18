<?

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController {

    public function login() {

        $userRepository = new UserRepository();


        if (!$this->isPost()) {
            return $this->login('login');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if (!$user) {// if there is not user with provided email in database
            // get login panel with proper message
            return $this->render('login', ['messages' => ["User with provided email not exists."]]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["User with provided email not exists."]]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ["Invalid password."]]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/workout");

    }

}
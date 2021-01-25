<?

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
require_once __DIR__.'/../security/Guard.php';

class SecurityController extends AppController {

    public function login() {

        if (Guard::isAuth()) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/default");
        }

        $userRepository = new UserRepository();

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

        Guard::auth($user->getId(), $user->getRole());

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/meals");

    }

    public function loginPanel()
    {
        if (Guard::isAuth()) {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/meals");
        }
        return $this->render('login');
    }

    public function logout()
    {
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/login");
    }

}
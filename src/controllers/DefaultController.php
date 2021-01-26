<?

require_once 'AppController.php';
require_once __DIR__.'/../security/Guard.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login', ['message' => 'Testuję czy to działa']);
    }

    public function workout() {
        echo Guard::getId();
        $this->render("workout");
    }

}
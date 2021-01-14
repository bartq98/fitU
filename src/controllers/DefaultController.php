<?

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login', ['message' => 'Testuję czy to działa']);
    }

    public function projects() {
        $this->render("projects");
    }

}
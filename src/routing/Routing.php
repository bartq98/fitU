<?

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/MealController.php';
require_once 'src/controllers/WeightController.php';
require_once 'src/controllers/AdminController.php';

require_once 'Route.php';
require_once 'RoutesCollector.php';


class Routing {

    private RoutesCollector $routes;

    public function __construct()
    {
        $this->routes = new RoutesCollector();
    }

    public function addRoute($url, $controller, $action, $method, $userRole)
    {
        $route = new Route($url, $controller, $action, $method, $userRole);
        $this->routes->addRoute($route);
    }

    private function checkAccessRules($userRule, $routeRule)
    {
        if (!$routeRule)  {
            return TRUE;
        }
        $rules = explode(',', $routeRule);
        if (in_array($userRule, $rules)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function run($url, $isUserAuth) {

        $givenUrl = explode("/", $url)[0];

        self::addRoute('', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'login', 'POST', '');
        self::addRoute('logout', 'SecurityController', 'logout', 'GET', '');

        self::addRoute('register', 'SecurityController', 'registerPanel', 'GET', 'not_logged_user');
        self::addRoute('register', 'SecurityController', 'register', 'POST', '');

        self::addRoute('default', 'MealController', 'meals', 'GET', 'normal_user');
        self::addRoute('default', 'AdminController', 'adminPanel', 'GET', 'admin');
        self::addRoute('default', 'SecurityController', 'logout', 'GET', '');

        self::addRoute('meals', 'MealController', 'meals', 'GET', 'normal_user');
        self::addRoute('weight', 'WeightController', 'weight', 'GET', 'normal_user');
        self::addRoute('weight', 'WeightController', 'addUserWeight', 'POST', 'normal_user');

        self::addRoute('get-weight', 'WeightController', 'getUserWeight', 'GET', 'normal_user,admin');


        self::addRoute('userinfo', 'AdminController', 'info', 'GET', 'admin');


        foreach ($this->routes as $route) {
            if ($route->getUrl() == $givenUrl and $route->getMethod() == $_SERVER['REQUEST_METHOD'] and $this->checkAccessRules(Guard::getRole(), $route->getUserRole())) {

                $controller = $route->getController();
                $object = new $controller;
                $action = $route->getAction();
                $object->$action();
                return;
            }
        }
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/default");
    }

}
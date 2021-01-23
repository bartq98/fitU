<?

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/MealController.php';
require_once 'src/controllers/WeightController.php';

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

        $action = explode("/", $url)[0];

        self::addRoute('', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'login', 'POST', '');
        self::addRoute('logout', 'SecurityController', 'logout', 'GET', 'normal_user,admin');

        self::addRoute('meals', 'MealController', 'meals', 'GET', 'normal_user,admin');
        self::addRoute('weight', 'WeightController', 'weight', 'GET', 'normal_user,admin');


        foreach ($this->routes as $route) {
            if ($route->getUrl() == $action and $route->getMethod() == $_SERVER['REQUEST_METHOD'] and $this->checkAccessRules(Guard::getRole(), $route->getUserRole())) {

                $controller = $route->getController();
                $object = new $controller;
                $action = $route->getAction() ?: 'login';
                $object->$action();
                return;
            }
        }
        $controller = new SecurityController();
        $controller->loginPanel();
    }

}
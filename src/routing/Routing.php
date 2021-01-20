<?

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';

require_once 'Route.php';
require_once 'RoutesCollector.php';


class Routing {

    private RoutesCollector $routes;

    public function __construct()
    {
        $this->routes = new RoutesCollector();
    }

    private function scanControllers() {
        foreach (scandir(__DIR__."/../controllers") as $filename) {
            $path = __DIR__.'/../controllers'.$filename;
            if (is_file($path)) {
                echo "Found".$path;
                require $path;
            }
        }
    }

    public function addRoute($url, $controller, $action, $method, $userRole)
    {
        $route = new Route($url, $controller, $action, $method, $userRole);
        $this->routes->addRoute($route);
    }


    public function run($url, $isUserAuth) {

        $action = explode("/", $url)[0];

        self::scanControllers(); // automatically updates if there is any controller
        self::addRoute('', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'loginPanel', 'GET', '');
        self::addRoute('login', 'SecurityController', 'login', 'POST', '');
        foreach ($this->routes as $route) {
            if ($route->getUrl() == $action and $route->getMethod() == $_SERVER['REQUEST_METHOD']) {

                $controller = $route->getController();
                $object = new $controller;
                $action = $route->getAction() ?: 'login';
                $object->$action();
                return;
            }
        }
        die("Wrong URL");

    }

}
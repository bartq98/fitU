<?

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';

require_once 'Route.php';
require_once 'RoutesCollector.php';
require_once 'route_table.php';


class Routing {

    public static $routes;

    private function scanControllers() {
        foreach (scandir(dirname(__FILE__)) as $filename) {
            $path = dirname(__FILE__) . '/../controllers' . $filename;
            if (is_file($path)) {
                require $path;
            }
        }
    }


    public static function addRoute($url, $controller, $action, $method, $userRole)
    {
        $route = new Route($url, $controller, $action, $method, $userRole);
        self::$routes->addRoute($route);
    }


    public static function run($url, $isUserAuth) {

        $action = explode("/", $url)[0];

        self::scanControllers(); // automatically updates if there is any controller

        foreach (self::$routes as $route) {
            if ($route->getUrl() == $action and $route->getMethod() == $_SERVER['REQUEST_METHOD'] and $route->getUserRole() == $isUserAuth) {

                $controller = $route->getController();
                $object = new $controller(explode("/", $url));
                $action = $route->getAction() ?: 'index';

                $object->$action();
                return;
            }
        }
        die("Wrong URL");

    }

    public static function initialize($coll) {
        self::$routes = $coll;
        require 'route_table.php';
    }

}
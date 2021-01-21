<?

class AppController {

    private $request;

    public function __construct()
    {
        $this->request = $_SERVER["REQUEST_METHOD"];
    }

    protected function isGet() : bool
    {
        return $this->request === 'GET';
    }

    protected function isPost() : bool
    {
        return $this->request === 'POST';
    }

    protected function render(string $templateName = null, array $variables = []) {

        $templatePath = 'public/views/'.$templateName.'.php';

        if (file_exists($templatePath)) {
            extract($variables);
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
            print $output;
        } else {
            print "File from provided path did not found.";
        }

    }

    protected function redirect($direct) {
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location : {$url}/{$direct}");
    }

}
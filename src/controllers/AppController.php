<?

class AppController {

    protected function render(string $templateName = null, array $variables = []) {

        $templatePath = 'public/views/'.$templateName.'.php';

        if (file_exists($templatePath)) {
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
            print $output;
        } else {
            print "File from provided path did not found.";
        }

    }

}
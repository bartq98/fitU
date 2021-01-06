<?

class AppController {

    protected function render(string $templateName = null) {

        $templatePath = 'public/views/'.$templateName.'.html';

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
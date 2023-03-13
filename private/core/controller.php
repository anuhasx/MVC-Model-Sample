<?php
/**
 * The Controller class is a base class for all controllers in the application.
 */
class Controller {
    /**
     * This method is responsible for loading a view file and passing data to it.
     * @param string $view The name of the view file to load.
     * @param array $data An array of data to pass to the view.
     * @return string The contents of the view file as a string.
     */
    public function view($view, $data = array()) {
        // Extract the data array into variables, so they can be used in the view file.
        extract($data);

        // Check if the specified view file exists.
        if (file_exists("../private/views/" . $view . ".view.php")) {
            // Return the contents of the view file.
            return file_get_contents("../private/views/" . $view . ".view.php");
        } else {
            // If the specified view file does not exist, return the contents of the 404 view file instead.
            return file_get_contents("../private/views/404.view.php");
        }
    }
}

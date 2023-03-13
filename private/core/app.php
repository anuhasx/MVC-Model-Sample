<?php
/**
 * The App class is the entry point for a simple MVC web application.
 */
class App {
    /**
     * The name of the default controller to use if one is not specified in the URL.
     * @var string
     */
    protected $controller = "home";

    /**
     * The name of the default method to call if one is not specified in the URL.
     * @var string
     */
    protected $method = "index";

    /**
     * An array of parameters passed in the URL.
     * @var array
     */
    protected $params = array();

    /**
     * The constructor method for the App class.
     * This method is responsible for mapping the URL entered by the user to the appropriate controller and method.
     */
    public function __construct() {
        // Get the URL segments from the user input.
        $URL = $this->getURL();

        // Check if a controller file exists for the first URL segment and set the controller name.
        if (file_exists("../private/controllers/" . $URL[0] . ".php")) {
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]); // Remove the controller name from the URL array.
        }

        // Include the controller file and create the controller object.
        require "../private/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller();

        // Check if a method exists in the controller for the second URL segment and set the method name.
        if (isset($URL[1])) {
            if (method_exists($this->controller, $URL[1])) {
                $this->method = ucfirst($URL[1]);
                unset($URL[1]); // Remove the method name from the URL array.
            }
        }

        // Set the URL parameters.
        $URL = array_values($URL);
        $this->params = $URL;

        // Call the appropriate controller method with the URL parameters.
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /**
     * Get the URL segments from the user input.
     * @return array An array of URL segments.
     */
    private function getURL() {
        // Get the URL from the user input or default to 'home'.
        $url = isset($_GET['url']) ? $_GET['url'] : "home";
        // Sanitize the URL and return as an array of segments.
        return explode("/", filter_var(trim($url, "/")), FILTER_SANITIZE_URL);
    }
}

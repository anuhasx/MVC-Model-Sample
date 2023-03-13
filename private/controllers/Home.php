<?php
/**
 * The Home class is a controller for the home page of the application.
 */
class Home extends Controller {
    /**
     * This method is the action method for the home page.
     * It loads the home view using the view method of the base Controller class.
     */
    function index() {
        // Load the home view using the view method of the base Controller class.
        echo $this->view('home');
    }
}

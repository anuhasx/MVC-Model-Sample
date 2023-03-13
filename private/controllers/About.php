<?php
/**
 * The About class is a controller for the students page of the application.
 */
class About extends Controller {
    /**
     * This method is the action method for the students page.
     * It accepts an optional $id parameter and echoes the string 'About'.
     * @param int|null $id An optional ID parameter for the student.
     */
    function index($id = null) {
        echo 'About';
    }
}

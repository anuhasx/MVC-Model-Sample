# MVC Model Sample

## Description

This is a PHP project that uses the MVC pattern to organize the code into models, views, and controllers. The private folder contains all the application code, while the public folder contains the files that are accessible to the public.

## Directory Structure

- `private`: This folder contains all the application code that is not accessible to the public. It is further divided into the following subfolders:
  - `controllers`: This folder contains all the controller classes, which are responsible for handling HTTP requests and responses.
  - `core`: This folder contains the main application class and other core classes that are used throughout the application.
  - `models`: This folder contains all the model classes, which are used to interact with the database and represent data in the application.
  - `views`: This folder contains all the view files, which are used to generate the HTML that is sent to the user's browser.
- `public`: This folder contains all the files that are accessible to the public. This includes the main `index.php` file, as well as any CSS, JavaScript, or image files that the application uses.

## Usage

To use the application, you will need to have a web server with PHP installed. Simply copy the entire `private` folder to your web server's root directory, and copy the `public` folder to a directory that is accessible to the public. Then, navigate to the `index.php` file in your web browser to access the application.

## Author

Anuhas Kalhara

- Email: anuhaskalhara@acc.vvecon.com
- Company: VVECON Developers

## License

This project is licensed under the MIT License - see the LICENSE.md file for details.

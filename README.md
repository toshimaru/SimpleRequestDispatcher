Simple Request Dispatcher
====================
PHP Simple Request Dispatcher dispatches URL to Controllers. No Models, No Views. Inspired by CakePHP.

[![Build Status](https://travis-ci.org/toshimaru/SimpleRequestDispatcher.png?branch=master)](https://travis-ci.org/toshimaru/SimpleRequestDispatcher)

Requirements
-----
* Web Server - Apache and mod_rewrite.
* PHP 5.3 or greater.

Features
-----
* No models, No views.
* Simple, testable, minimal controller
* Using composer
* Using autoload (There are two versions of autoload - with or without composer's autoload)

Why no models, no views?
-----
When I joined a project, there were tons of legacy code. The code was seperated with the roles - Model, View, Controller. However, the controller wasn't classed (It was like hell!). To make it testable, I replaced only controllers. This dispatcher is written based on the code I wrote at that time.

Quickstart
-----
```bash
$ git clone git://github.com/toshimaru/SimpleRequestDispatcher.git
$ cd SimpleRequestDispatcher
$ composer install
# require php5.4+
$ php -S localhost:8000
```

If you access `localhost:8000`, you can see '**Your request is successfully dispatched!**'. Enjoy!

Base Directory Structure
-----

| Directory   | Description         |
| ----------- | ------------------- |
| Controller/ | Contains the controllers.          |
| Tests/      | Contains the tests. Using PHPUnit. |
| Lib/        | Contains core code.                |

Dispatch rule
-----

| Request     | Controller       | Action        |
| ----------- | ---------------- | ------------- |
| /                  | Index.php      | index        |
| /controller/       | Controller.php | index        |
| /controller/action | Controller.php | action       |
| /controller/action/var | Controller.php | action($var)      |

Controllers
-----

Default controller is `Index.php` and default action is `function index()`.

All controllers should extend `\Controller\Controller` class so that every controller can use common function which is defined in `Controller.php`.

See `Sample.php` to see how to write controller.

Unit Testing
-----
Before running tests, you need to install PHPUnit via Composer:

    composer install --dev

After installing PHPUnit, you can test the code:

    vendor/bin/phpunit

License
-----
MIT license

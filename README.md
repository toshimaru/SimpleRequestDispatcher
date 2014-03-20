[![Build Status](https://travis-ci.org/toshimaru/SimpleRequestDispatcher.png?branch=master)](https://travis-ci.org/toshimaru/SimpleRequestDispatcher)

Simple Request Dispatcher
=====
PHP Simple Request Dispatcher dispatches URL to Controllers. No Models, No Views. Inspired by CakePHP.

Requirements
-----
* Web Server - Apache and mod_rewrite
* PHP 5.3 or greater

Features
-----
* No models, No views
* Simple, testable, minimal controller
* Using composer
* Using autoload (There are two versions of autoload - with or without composer's autoload)

Why no models, no views?
-----
When I joined a project, there were tons of legacy code. The code was seperated with some roles - Model, View, Controller, yeah, it was like MVC. However, the controller wasn't classed and testable(I felt like hell!). I ended up replacing only controllers. This dispatcher is written based on the code I wrote at that time.

Quickstart
-----
```bash
$ git clone git://github.com/toshimaru/SimpleRequestDispatcher.git
$ cd SimpleRequestDispatcher
$ composer install
# require php5.4+ to use command `php -S`
$ php -S localhost:8000
```

Access `localhost:8000` with your browser, you can see '**Your request is successfully dispatched!**'. Enjoy!

Directory Structure
-----

| Directory   | Description         |
| ----------- | ------------------- |
| Controller/ | Contains controllers.                 |
| Tests/      | Contains tests. Written with PHPUnit. |
| Lib/        | Contains core code.                   |

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

All controllers should extend `\Controller\Controller` class so that every controller can use common functions which are defined in `Controller.php`.

See `Sample.php` to see how it works.

Unit Testing
-----
Before running tests, you need to install PHPUnit via Composer:

    composer install --dev

After installing PHPUnit, you can test the code:

    vendor/bin/phpunit

License
-----
MIT license

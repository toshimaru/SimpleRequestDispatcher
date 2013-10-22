<?php

if (dirname($_SERVER['PHP_SELF']) === '/index.php') {
	define('BASE_DIR', '');
} else {
	define('BASE_DIR', dirname($_SERVER['PHP_SELF']));
}

require 'vendor/autoload.php';
$dispatcher = new Srd\Dispatcher();
$dispatcher->dispatch(new Srd\Request(), new Srd\Response());

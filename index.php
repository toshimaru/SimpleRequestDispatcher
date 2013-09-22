<?php

define('BASE_DIR', dirname($_SERVER['PHP_SELF']));

require 'Lib/Loader/SplClassLoader.php';
SplClassLoader::registerNamespace('Controller', __DIR__);
SplClassLoader::registerNamespace('Srd', __DIR__ . '/Lib');

$dispatcher = new Srd\Dispatcher();
$dispatcher->dispatch(new Srd\Request(), new Srd\Response());

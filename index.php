<?php

require 'Lib/Srd/SplClassLoader.php';
SplClassLoader::registerNamespace('Controller', __DIR__);
SplClassLoader::registerNamespace('Srd', __DIR__ . '/Lib');

$dispatcher = new Srd\Dispatcher();
$dispatcher->dispatch(new Srd\Request(), new Srd\Response());

<?php

require 'SplClassLoader.php';
SplClassLoader::registerNamespace('Controller', __DIR__);
SplClassLoader::registerNamespace('Srd', __DIR__ . '/Lib');

$request = new Srd\Request();
$response = new Srd\Response();
$dispatcher = new Srd\Dispatcher();

$dispatcher->dispatch($request, $response);

<?php

require 'SplClassLoader.php';
$classLoader = new SplClassLoader('Controller', __DIR__);
$classLoader->register();

$requestArray = explode('/', $_SERVER['REQUEST_URI']);
$className = 'Controller\\' . $requestArray[2];
$class = new $className();
$class->index();
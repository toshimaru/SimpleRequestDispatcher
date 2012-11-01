<?php

require 'SplClassLoader.php';
$classLoader = new SplClassLoader('Controller', __DIR__);
$classLoader->register();

$requestArray = explode('/', $_SERVER['REQUEST_URI']);
$requestParams = array();

$className = 'Controller\\' . ((empty($requestArray[2])) ? 'index' : $requestArray[2] );
$class = new $className();

$action = (empty($requestArray[3])) ? 'index' : $requestArray[3];
$ReflectMethod = new ReflectionMethod($class, $action);
$ReflectMethod->invokeArgs($class, $requestParams);
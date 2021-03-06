<?php
/**
 * index.php without Composer AutoLoad.
 * If you don't want to use Composer, use this.
 */

require 'Lib/Loader/SplClassLoader.php';
SplClassLoader::registerNamespace('Controller', __DIR__);
SplClassLoader::registerNamespace('Srd', __DIR__ . '/Lib');

$dispatcher = new Srd\Dispatcher();
$dispatcher->dispatch(new Srd\Request(), new Srd\Response());

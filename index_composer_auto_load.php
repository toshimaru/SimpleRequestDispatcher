<?php
/**
 * index.php using Composer AutoLoad feature
 */
require 'vendor/autoload.php';
$dispatcher = new Srd\Dispatcher();
$dispatcher->dispatch(new Srd\Request(), new Srd\Response());

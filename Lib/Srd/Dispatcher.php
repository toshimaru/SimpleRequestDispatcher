<?php 
namespace Srd;
/**
 * 
 */
class Dispatcher
{
	public function __construct() {
		
	}

	public function dispatch($request, $response) {
		$ReflectionController = new \ReflectionClass($request->controller);
		$controller = $ReflectionController->newInstance();

		$ReflectMethod = new \ReflectionMethod($controller, $request->action);
		$ReflectMethod->invokeArgs($controller, array('todo'));
	}
}
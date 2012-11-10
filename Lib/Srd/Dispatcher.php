<?php 
namespace Srd;
/**
 * Dispatcher
 *
 * @package SimpleRequestDispatcher
 * @author toshimaru
 */
class Dispatcher
{
	public function __construct() {
		
	}

	public function dispatch($request, $response) {
		$ReflectController = new \ReflectionClass($request->controller);
		$controller = $ReflectController->newInstance($request, $response);

		$ReflectMethod = new \ReflectionMethod($controller, $request->action);
		
		$args = $this->args_fill($request->params['url'], count($ReflectMethod->getParameters()));
		$ReflectMethod->invokeArgs($controller, $args);
	}

	protected static function args_fill(array $params, $neededCount) {
		if (count($params) < $neededCount) {
			foreach (range(count($params) + 1, $neededCount) as $i) {
				$params[$i] = '';
			}
		}

		return $params;
	}
}
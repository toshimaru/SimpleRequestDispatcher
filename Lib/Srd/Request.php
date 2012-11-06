<?php 
namespace Srd;
/**
 * 
 */
class Request
{
	/**
	 * @var string
	 */
	public $url;

	/**
	 * @var string
	 */
	public $method;

	/**
	 * @var string
	 */
	public $controller;

	/**
	 * @var string
	 */
	public $action;

	/**
	 * parameters
	 *
	 * @var array
	 */
	public $params = array(
		'url' => array(),
		'get' => array(),
		'post' => array(),
		);

	public function __construct() {
		$this->uri = $_SERVER['REQUEST_URI'];
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->params['get'] = $_GET;
		$this->params['post'] = $_POST;
		$this->parseRequest($this->uri);
	}

	protected function parseRequest($uri) {
		$uri = substr($uri, strpos($uri , '?'));

		$requestArray = explode('/', $uri);
		$this->params['uri'] = array();

		$this->controller = 'Controller\\' . ((empty($requestArray[2])) ? 'index' : $requestArray[2] );
		$this->action = (empty($requestArray[3])) ? 'index' : $requestArray[3];
	}
}
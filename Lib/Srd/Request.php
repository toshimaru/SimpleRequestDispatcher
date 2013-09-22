<?php
namespace Srd;
/**
 * Request
 *
 * @package SimpleRequestDispatcher
 * @author toshimaru
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
	 * parameters (url|get|post)
	 *
	 * @var array
	 */
	public $params = array(
		'url' => array(),
		'get' => array(),
		'post' => array(),
	);

	public function __construct() {
		$this->url = $_SERVER['REQUEST_URI'];
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->params['get'] = $_GET;
		$this->params['post'] = $_POST;
		$this->parseRequest($this->url);
	}

	/**
	 * parse request URI, set controller and action
	 *
	 * @return void
	 */
	protected function parseRequest($url) {
		// TODO: /srd/***
		// $url = str_replace(dirname($_SERVER['PHP_SELF']), '', $url);

		if (strpos($url,'?') !== false) {
			$url = substr($url, 0, strpos($url , '?'));
		}
		$requestArray = explode('/', $url);

		$url_params = array_splice($requestArray, 3);
		$this->params['url'] = $url_params;

		$this->controller = 'Controller\\' . ((empty($requestArray[1])) ? 'index' :  $this->camelize($requestArray[1]) );
		$this->action = (empty($requestArray[2])) ? 'index' : $requestArray[2];
	}

	protected static function camelize($str) {
		return str_replace(' ','',ucwords(str_replace('_',' ',$str)));
	}

	protected static function decamelize($str) {
		return ltrim(preg_replace('/([A-Z])/e',"'_'.strtolower('$1')",$str),'_');
	}
}
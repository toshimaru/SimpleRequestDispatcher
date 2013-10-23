<?php
namespace Controller;

class IndexTest extends \PHPUnit_Framework_TestCase
{
	private $controller;

	public function setUp() {
		$request = new \stdClass();
		$response = new \stdClass();

		$this->controller = new Index($request, $response);
	}

	public function testIndex() {
		$this->assertEquals('<h1 style="color:green;">Your request is successfully dispatched!</h1>', $this->controller->index());
	}

}

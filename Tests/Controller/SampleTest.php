<?php
namespace Controller;

class SampleTest extends \PHPUnit_Framework_TestCase
{
	private $controller;

	public function setUp() {
		$request = new \stdClass();
		$request->params = array(
			'get' => array(),
		);

		$response = new \stdClass();

		$this->controller = new Sample($request, $response);
	}

	public function testIndex() {
		$this->expectOutputRegex('/^This is Sample Controller\..*/');
		$this->controller->index();
	}

	public function testHelloWorld() {
		$this->assertEquals('Hello World', $this->controller->helloworld());
	}

	public function testSay() {
		$this->assertEquals('hi', $this->controller->say("hi"));
	}

	public function testSay2word() {
		$this->assertEquals('good<br>morning', $this->controller->say2word("good", "morning"));
	}

	public function testSay3word() {
		$this->assertEquals('how<br>are<br>you', $this->controller->say3word("how", "are", "you"));
	}

	public function testRequireFirstStringOk() {
		$this->assertEquals('200 OK', $this->controller->requireFirstString("require!"));
	}

	public function testShowRequestInfo() {
		$this->expectOutputRegex('/^stdClass Object.*/');
		$this->controller->showRequestInfo();
	}

	public function testShowGetParam() {
		$this->expectOutputRegex('/^Array.*/');
		$this->controller->showGetParam();
	}
}

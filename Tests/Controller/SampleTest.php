<?php

class SampleTest extends PHPUnit_Framework_TestCase
{
	private $controller;

	public function setUp() {
		$request = array();
		$response = array();
		$this->controller = new \Controller\Sample($request, $response);
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
}

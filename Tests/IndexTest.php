<?php
/**
 *
 */
class IndexTest extends PHPUnit_Framework_TestCase
{
	public function setUp() {
	}

	/**
	 * @runInSeparateProcess
	 * @dataProvider indexReqProvider
	 */
	public function testDispatchRoot($req) {
		$_SERVER['REQUEST_URI'] = $req;
		$_SERVER['REQUEST_METHOD'] = 'GET';
		$this->expectOutputString('<h1 style="color:green;">Your request is successfully dispatched!</h1>');
		require('index.php');
	}

	public function indexReqProvider() {
		return array(
			array('/'),
			array('/?foo=bar'),
		);
	}

	/**
	 * @runInSeparateProcess
	 */
	public function test404() {
		$_SERVER['REQUEST_URI'] = '/404';
		$_SERVER['REQUEST_METHOD'] = 'GET';
		require('index.php');
	}

	/**
	 * @runInSeparateProcess
	 */
	public function test500() {
		$_SERVER['REQUEST_URI'] = '/sample/requireFirstString/';
		$_SERVER['REQUEST_METHOD'] = 'GET';
		require('index.php');
	}

	/**
	 * @runInSeparateProcess
	 */
	public function testTooManyParams() {
		$_SERVER['REQUEST_URI'] = '/sample/a/b/c/d/e/f';
		$_SERVER['REQUEST_METHOD'] = 'GET';
		require('index.php');
	}

	/**
	 * @dataProvider requestProvider
	 * @runInSeparateProcess
	 */
	public function testSample($request) {
		$_SERVER['REQUEST_URI'] = $request;
		$_SERVER['REQUEST_METHOD'] = 'GET';
		require('index.php');
	}

	public function requestProvider() {
		return array(
			array('/sample'),
			array('/sample/say3word/how/are/you'),
			array('/sample/say'),
		);
	}
}

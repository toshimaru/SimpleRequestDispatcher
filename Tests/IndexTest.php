<?php
/**
 *
 */
class IndexTest extends PHPUnit_Framework_TestCase
{
	public function setUp() {
	}

	public function testDispatchRoot() {
		$_SERVER['REQUEST_URI']    = '/';
		$_SERVER['REQUEST_METHOD'] = 'GET';
		require('index.php');
	}

	public function test404() {
		// $_SERVER['REQUEST_URI']    = '/404';
		// $_SERVER['REQUEST_METHOD'] = 'GET';
		// require('index.php');
	}
}

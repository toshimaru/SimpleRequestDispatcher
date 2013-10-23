<?php
/**
 *
 */
class IndexSplLoaderTest extends PHPUnit_Framework_TestCase
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
		require('index_no_composer_autoload.php');
	}

	public function indexReqProvider() {
		return array(
			array('/'),
			array('/?foo=bar'),
			array('/sample'),
			array('/sample/say/hello'),
		);
	}

}

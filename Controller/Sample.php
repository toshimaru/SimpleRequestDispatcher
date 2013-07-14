<?php 
namespace Controller;
/**
 * hello world controller
 */
class Sample extends Controller
{
	public function index() {
		echo __class__;
	}

	public function helloworld() {
		echo 'Hello World';
	}

	public function say($str) {
		var_dump($this->request);
		echo $str;
	}

	public function test($str, $str2) {
		echo $str;
		echo $str2;
	}

	public function test2($str, $str2, $str3) {
		echo $str;
		echo $str2;
		echo $str3;
	}
}
